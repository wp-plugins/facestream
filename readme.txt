=== Facestream ===
Contributors: Blackphantom
Tags: Buddypress, Facebook,Facestream
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=TKBY4JM6WDSD2
Requires at least: WP 2.9.1, BuddyPress 1.2.3
Tested up to: WP 2.9.2, BuddyPress 1.2.3
Stable tag: 1.0.1.2

== Released under the GPL license ==
http://www.opensource.org/licenses/gpl-license.php

== Description ==

Facestream a Buddypress facebook intergration plugin.

With this plugin you can synchronize your activity stream and your facebook items.
Also you can send a facebook update upon forum topic creation and topic reply.

Everything is designed for easy-intergration, easy-setup and easy-usability.
With a lots of admin and per user settings.

This plugins uses teh cron functionality of wordpress, in wp 2.9.1 and wpmu 2.9.1 the cron was broken.
Please upgrade to 2.9.2 for this plugin to work.

!!! Please deactivate en re-activate the plugin after every upgrading to newest release!!!

Some options:
1. Synchronise facebook and buddypress activity's
2. Post new topic links to facebook.
3. Post topic reply's to facebook.
4. Extra filter on activity stream to show facebook updates.
5. A lots of user and admin options
6. Localisation and already translated to:
- English
- Dutch

The plugin got full localisation support.

== SPECIAL THANKS TO ==

== Installation ==
1. Upload this plugin to your `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Setup the facestream plugin in the admin.
4. Done!


!!! Please deactivate en re-activate the plugin after every upgrading to newest release!!!

Requirements.
- PHP5
- CURL
- JSON

== ChangeLog ==

= 1.0.1.2 = 
* Fixed jquery calls change (due upgrade bp 1.2.3)
* Fixed import

= 1.0.1.1 = 
* Fixed settings menu

= 1.0.1 = 
* Fixed special characters to facebook.
* Fixed conflict betweet facestream and tweetstream
* Fixed profile url and normal url blending
* Fixed fatal errors
* Fixed problem when upgrading buddypress tweetstream gave errors.
* Fixed conflict with FB-connect plugin.

= 1.0.0 =
* First release