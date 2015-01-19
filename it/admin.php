<?php
include_once '../sys/core/init.inc.php';
$page_title = "Add/Edit Event";
include_once 'header.php';
$center = new Center();
if(isset($_SESSION['user']))
{
	if ( isset($_POST['event_id'])){$id = (int) $_POST['event_id'];}
	else{$id=NULL;}
	$center->markup.=($center->displayEventForm($id));
	$center->spit();
}
else
{
	session_destroy();
	$center->markup.=($center->error_page('login_error'));
	$center->spit();
}
?>
<?php include_once 'footer.php'; ?>
