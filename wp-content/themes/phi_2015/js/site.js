jQuery(document).ready(function($) {

	//hide "I'm hiring clients!" dialog box on click
	$("#user-info-dismiss").click(function(){ 
			
		$("#user-info").slideUp();
	});

	//implement freetile.js 
	$("#designer-page article").freetile({
		
		animate:false
	});
	
	//quickie to replace broken images with placekittens for dev purposes.
	$('.work-card img').each(function() {
		
		$(this).attr('src', 'http://placekitten.com/g/600/600/');
	});
	
	
	// deal with the mobile navigation
	function checkForMobile() {
	
		console.log('checking for mobile: ' , $(window).width());
		
		if($(window).width() <= 600) {
	
			$('#global-nav').clone().attr('id', 'mobile-nav').appendTo($('.main-nav-logo'));
			$('#global-nav').addClass('hidden');
			$('#mobile-nav-trigger').removeClass('hidden');
			
			$('#mobile-nav').mmenu();
			$("#mobile-nav-trigger a").click(function() {
		         $("#mobile-nav").trigger("open.mm");
		    });
		    
		    $('.main-nav a').click(function() {
			    
			    $('#mobile-nav').trigger('close.mm');
		    })
		    			
		} else {
			
			$('#mobile-nav').remove();
			$('#global-nav').removeClass('hidden');
			$('#mobile-nav-trigger').addClass('hidden');
	
		}
	}
	
	//handle people resizing the window, but only call checkForMobile when the resize is done
	$(window).resize(function(){
		
		clearTimeout(this.id);
		this.id = setTimeout(checkForMobile, 500);
	})
	
	//call the mobile check right away
	checkForMobile();
});

