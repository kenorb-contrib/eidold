
// JavaScript Document
jQuery(function($){
	$(".price_table_tab").click(function(){

		$(".price_table_tab").css('z-index',0);
		$(this).css('z-index',30);
		
		var id = $(this).attr('id');
		if(id == 'part_time_tab')
		{
			$('#part_time_block').fadeIn();
			$('#full_time_block').fadeOut();
		}
		else if(id == 'full_time_tab')
		{
			$('#part_time_block').fadeOut();
			$('#full_time_block').fadeIn();
		}
		
	});
	
	
});

