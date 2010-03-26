<?php
/*
Plugin Name: Facestream
Plugin URI:
Description: Synchronises facebook with activity stream and back.
Version: 1.0.1.1
Author: Peter Hofman
Author URI: http://www.faboo.nl
*/

// Copyright (c) 2010 Faboo.nl. All rights reserved.
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// This is an add-on for Buddypress
// http://buddypress.org/
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************
function facestream_init() {
    require'facestream-functions.php';
}

add_action( 'bp_init', 'facestream_init' );

##############################################
##                                          ##
##             wp_cron stuff                ##
##                                          ##
##############################################

//on plugin activation register cron
register_activation_hook(__FILE__, 'facestream_activation');
add_action('facestream_cron_event', 'facestream_cron');


function facestream_activation() {
    wp_schedule_single_event(time()+300, 'facestream_cron_event');    
}

function facestream_cron() {

    global $wpdb;
    // get all usermeta with facebook authorisation
    if(get_site_option('facestream_user_settings_syncbp')==0){
        $user_metas = $wpdb->get_results($wpdb->prepare("SELECT * FROM $wpdb->usermeta WHERE meta_key='facestream_session_key';"));
        if($user_metas){
            foreach ($user_metas as $user_meta){
                facestream_getFacebook($user_meta->user_id);
            }
        }        
    }
    
    wp_schedule_single_event(time()+300, 'facestream_cron_event');    
    
}

?>