<?php
include_once 'sys/core/init.inc.php';
mysql_select_db(DB_NAME, $db) or die(mysql_error()); 

$id = addslashes($_REQUEST['id']);

$image = mysql_query("SELECT * FROM newsletter_image WHERE id=$id");
$image = mysql_fetch_assoc($image);
$image = $image['image'];

header("Content-type: image/jpeg");

echo $image;

?>