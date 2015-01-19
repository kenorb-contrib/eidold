<?php	
	include_once '../sys/core/init.inc.php';
	$page_title = "EID Calendar";
	include_once 'header.php';
?>

<?php 
	$useDay = $_GET['useDay'];
	$useMonth = $_GET['useMonth'];
	$useYear = $_GET['useYear'];
	$action = $_GET['action'];
	
	if($action == 'pre' || $action == 'next'){
		if($useMonth == '01' && $action == 'pre') 		{$useYear = intval($useYear); $useYear--;}	
		else if($useMonth == '12' && $action == 'next') 	{$useYear = intval($useYear); $useYear++;}
		$useYear = strval($useYear);
	}
	$month = array('pre'=>array('01'=>'12',
								 '02'=>'01',
								 '03'=>'02',
								 '04'=>'03',
								 '05'=>'04',
								 '06'=>'05',
								 '07'=>'06',
								 '08'=>'07',
								 '09'=>'08',
								 '10'=>'09',
								 '11'=>'10',
								 '12'=>'11',),
	
					'next'=> array('01'=>'02',
								 '02'=>'03',
								 '03'=>'04',
								 '04'=>'05',
								 '05'=>'06',
								 '06'=>'07',
								 '07'=>'08',
								 '08'=>'09',
								 '09'=>'10',
								 '10'=>'11',
								 '11'=>'12',
								 '12'=>'01',));
	
	$month_compare = array('pre'=>array('01'=>'Dec',
								 '02'=>'Jan',
								 '03'=>'Feb',
								 '04'=>'Mar',
								 '05'=>'Apr',
								 '06'=>'May',
								 '07'=>'Jun',
								 '08'=>'Jul',
								 '09'=>'Aug',
								 '10'=>'Sep',
								 '11'=>'Oct',
								 '12'=>'Nov',),
	
					'next'=> array('01'=>'Feb',
								 '02'=>'Mar',
								 '03'=>'Apr',
								 '04'=>'May',
								 '05'=>'Jun',
								 '06'=>'Jul',
								 '07'=>'Aug',
								 '08'=>'Sep',
								 '09'=>'Oct',
								 '10'=>'Nov',
								 '11'=>'Dec',
								 '12'=>'Jan',));
	
	$selected_month = $month_compare[$action][$useMonth];
	
	$center = new Center();	
	$center->markup.=($center->calendar($useYear.'-'.$month[$action][$useMonth].'-'.$useDay));
	$center->spit();
?>

<?php include_once 'footer.php'; ?>

