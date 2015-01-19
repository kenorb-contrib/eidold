// JavaScript Document
jQuery(function($){
	$('#countDown_screen').show();
	
	$d = new Date();
	$x = new Date("December 24, 2011 23:59:59")
	$h = $d.getHours();
	$m = $d.getMinutes();
	$s = $d.getSeconds();
	$second = parseInt($d.getTime()/1000);
	$x = parseInt($x.getTime()/1000);
	$diff = $x - $second;
	/*while( $second != 0 )
	{
		setTimeout("countDown()",1000);
	}*/
	//$('#countDown_screen #countDown_time').html("$second");
	countDown();
	$('#countDown_screen').click(function(){
		$(this).hide();
	});
});


function countDown(){
	$('#countDown_screen #countDown_time').html($d+$h+$m+$s+$second+"what the fuck"+$diff);
}