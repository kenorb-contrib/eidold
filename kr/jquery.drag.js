// JavaScript Document

jQuery(function($){
	$('#message_box').draggable();
	$('#message_box').mousedown(function(){
		$('#message_box').stop(function(){}).draggable();
	});
	/*$('#google_translation_block').draggable();
	$('#google_translation_block').mousedown(function(){
		$('#google_translation_block').stop(function(){}).draggable();
	});*/
});
