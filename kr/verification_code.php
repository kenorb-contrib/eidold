<?php
	session_start();
	
	// create the basic 60 X 18
	$v_img = imagecreate(60,18);
	
	// set string color ...
	$str_color = imagecolorallocate($v_img,50,50,50);
	
	// set background color ...
	$bg_color = imagecolorallocate($v_img,255,255,0);
	
	// fill the background color in the basic image ...
	imagefill($v_img,1,1,$bg_color);
	
	// apply salt effect to the resized image ...
	$salt_color = imagecolorallocate($v_img,150,150,100);
	$salt_chars = array('/','/','!','~','-','+','#','|');
	for($i = 0 ; $i < 7 ; $i ++)
		//imagestring($v_img,5,rand(0,60),rand(3,7),$salt_chars[rand(0,(count($salt_chars)-1))],$salt_color);
		imagestring($v_img,5,$i*9,rand(2,5),$salt_chars[rand(0,(count($salt_chars)-1))],$salt_color);
		
	// fill the string into the basic image ...
	imagestring($v_img,5,8,1,$_SESSION['v_str'],$str_color);
	
	// resize the image ...
	$v_img = resize($v_img,90,30);
	
	
	
	// set the image to jpeg ...
	imagejpeg($v_img);
	header("Content-type: image/jpeg");
	
	// resize the image ...
	function resize($img,$width,$height) {
		$new_image = imagecreatetruecolor($width, $height);
		imagecopyresampled($new_image, $img, 0, 0, 0, 0, $width, $height, imagesx($img), imagesy($img));
		$img = $new_image;
		
		return $img;
   	}  
?>