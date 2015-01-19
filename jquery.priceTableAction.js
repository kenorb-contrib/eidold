// JavaScript Document
jQuery(function($){
	$(".price_duration_title").click(function(){
		
		var id = $(this).attr('id');
		var nth = ($(this).index())+1;
		
		$('.price_duration_title').css('background-color','#fff');
		$(this).css('background-color','#eee');
		$('.price_duration_title').css('color','#000');
		$(this).css('color','#000');
		$('.price_info_right_tables').hide();
		$('.price_info_right_tables:nth-child('+nth+')').show();
	});
	
	$(".part_time_price_duration_title").click(function(){
		
		var id = $(this).attr('id');
		var nth = ($(this).index())+1;
		
		$('.part_time_price_duration_title').css('background-color','#fff');
		$(this).css('background-color','#eee');
		$('.part_time_price_duration_title').css('color','#000');
		$(this).css('color','#000');
		$('.part_time_price_info_right_tables').hide();
		$('.part_time_price_info_right_tables:nth-child('+nth+')').show();
	});
});

