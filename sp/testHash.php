<?php
include_once '../sys/core/init.inc.php';
if(isset($_SESSION['user']) && $_SESSION['user']['level']==1)
{
	/*$pass_length = 8;
	$pass_code = '';
	$char_set = array();
	//$chars = range('a','z');
	foreach (range('A','Z') as $char){
		$char_set[] = $char; 
	}
	foreach (range('1','9') as $char){
		$char_set[] = $char;
	}
	
	//generate the passcode ...
	for( $i = 0 ; $i < $pass_length; $i ++){
		$pass_code .= $char_set[rand(0,count($char_set)-1)];
	}*/
	
	$pass_code = 'wangxindigital';
	$obj = new Admin($db);
	echo date('d-m-Y H:i:s').'<br><br>';
	echo $pass_code.'<br /><br />';
	$pass_encrypted = $obj->testSaltedHash($pass_code);
	echo $pass_encrypted;
}
else
{
	echo 'invalid user';
}

?>