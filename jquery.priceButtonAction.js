// JavaScript Document
jQuery(function($){
	var top = document.body.scrollTop;
	var win_height = window.innerHeight;
	var element_height = $('#mail_box_form_blk').height();
	
	var marginTop = top + ( win_height - element_height ) / 2 - 30;
	$('#mail_box_form_blk').css('top',marginTop);
	
	$('.pay_online_btn').click(function(){
		$('#mail_box_bg').fadeIn(800);
			var top = document.body.scrollTop;
			var win_height = window.innerHeight;
			var element_height = $('#mail_box_form_blk').height();
			
			var marginTop =  ( win_height - element_height ) / 2 - 30;
			$('#mail_box_form_blk').css('top',marginTop);
		});
	$('#mail_box_close').click(function(){
		$('#mail_box_bg').fadeOut(500);
		});







});

