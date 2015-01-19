// JavaScript Document
jQuery(function($){
	
	var hellobar_height = $(".hellobar_wrap").outerHeight();
	var animateSpeed = 300;
	
	setTimeout(function(){hellobar_show()},1000);
	
	$(".hellobar_hide").click(function(){
		$('.menu_body').css("margin-top",0+"px");   
		$( ".hellobar_wrap" ).animate({
			"margin-top":-hellobar_height
			//opacity: 0.25,
			//left: "+=50",
			//height: "toggle"
		  }, animateSpeed, function() {
			// Animation complete.
			$(".hellobar_show").slideDown();
			
		  });
		
		 
		
	});
	
	$(".hellobar_show").click(function(){
		$( ".hellobar_wrap" ).animate({
			"margin-top":0
			//opacity: 0.25,
			//left: "+=50",
			//height: "toggle"
		  }, animateSpeed, function() {
			// Animation complete.
			$('.menu_body').css("margin-top",hellobar_height+"px");  
		  });
		 $(".hellobar_show").slideUp(); 
		 
		
	});
		
	function hellobar_show()
	{
		$( ".hellobar_wrap" ).slideDown(function(){
			$('.menu_body').css("margin-top",hellobar_height+"px");  
			});
		
	}
});

