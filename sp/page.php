<?php	
	include_once '../../sys_ch/core/init.inc.php';
	//$page_title = "English in Dublin, The Best English Language School in Ireland";
	$page_title = $_REQUEST['page_title'];
	include_once 'header.php';
?>


<?php 
	$center = new Center();
	if($_REQUEST['page'] == "contact_us")
	{$center->find_my_ip();}
	$center->markup.=($center->$_REQUEST['page']());
	$center->spit();
?>

<?php include_once 'footer.php'; ?>

