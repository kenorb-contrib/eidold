// JavaScript Document
jQuery(function($){
	$('#message_box').animate({top:$(window).scrollTop()+120+"px" },{queue: false, duration: 5000}); 
	//scroll the message box to the top offset of browser's scrool bar
	$(window).scroll(function()
	{
		$('#message_box').stop();
  		$('#message_box').animate({top:$(window).scrollTop()+120+"px" },{queue: false, duration: 1000});  
	});
    //when the close button at right corner of the message box is clicked 
	$('#close_message').click(function()
	{
  		//the messagebox gets scrool down with top property and gets hidden with zero opacity 
		$('#message_box').hide();
	});
	
});