// JavaScript Document
jQuery(function($){	
	position();
	$('.online_marketing_btn').click(function(){
		
		//alert('i am clicked !!!');
		$('#online_marketing_bg').fadeIn(800);
		position();
	});
			
		
	$('#online_marketing_close').click(function(){
		$('#online_marketing_bg').fadeOut(500);
		});


	function position()
	{
		var top = document.body.scrollTop;
		var win_height = window.innerHeight;
		var eh = $("#online_marketing_info_blk").outerHeight();
		var marginTop = top + ( win_height - eh ) / 2 - 30;
		$('#online_marketing_info_blk').css('top',marginTop);
	}
	
	
	
	/**************************************************************/
	
	congrats_position();
	$('#congrats_close').click(function(){
		$('#congrats_bg').fadeOut(500);
		});


	function congrats_position()
	{
		var top = document.body.scrollTop;
		var win_height = window.innerHeight;
		var eh = $("#congrats_info_blk").outerHeight();
		var marginTop = top + ( win_height - eh ) / 2 - 30;
		$('#congrats_info_blk').css('top',marginTop);
	}
	
	
	/*$('#price_submit').click(function(){
		var data = $('#online_marketing_form :input').serializeArray();
		$.post($('#online_marketing_form').attr('action'),data,function(result){ $('#online_marketing_info_blk').html(result);})
		});

	$('#online_marketing_form').submit(function(){
		return false;
		});*/


});

