jQuery(document).ready(function($) {

	//hide "I'm hiring clients!" dialog box on click
	$("#user-info-dismiss").click(function(){ 
			
		$("#user-info").slideUp();
	})

	//implement freetile.js 
	$("#designer-page article").freetile({
		
		animate:false
	});
	
	//quickie to replace broken images with placekittens for dev purposes.
	$('.work-card img').each(function() {
		
		$(this).attr('src', 'http://placekitten.com/g/600/600/');
	})
	
});

