jQuery(document).ready(function($) {

	// Your JavaScript goes here
	$("#user-info-dismiss").click(function(){ 
			
		$("#user-info").slideUp();
	})

	$("#designer-page article").freetile({
		
		animate:true
	});
	
	
	//quickie to replace broken images with placekittens for dev purposes.
	$('.work-card img').each(function() {
		
		$(this).attr('src', 'http://placekitten.com/g/600/600/');
	})
	
});

