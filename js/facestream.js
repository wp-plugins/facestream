j('#aw-whats-new-submit').click(function() {

	if(j('#activity_to_facebook').attr('checked') == true)
	{
		var content = j('#whats-new').val();
		content = content.replace(' #FACEBOOK ','');
		content  = content+' #FACEBOOK ';
		j('#whats-new').val(content);
	}
});


j('#forum-topic-form').submit(function() {
  
if(j('#topic_to_facebook').attr('checked') == true)
	{
		var content = j('#topic_title').val();
		content = content.replace(' #FACEBOOK ','');
		content  = content+' #FACEBOOK ';
		j('#topic_title').val(content);
	}
	
	if(j('#topicreply_to_facebook').attr('checked') == true)
	{
		var content = j('#reply_text').val();
		content = content.replace(' #FACEBOOK ','');
		content  = content+' #FACEBOOK ';
		j('#reply_text').val(content);
	}
    
});
