<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "都柏林英语学校 | 艺术墙";
	include_once 'header.php';
?>

<?php
echo '
		<div class="info_block_background" id="gallery_block">
			<div class="info_block" id="eid_gallery_block">
			
			 <div id="gallery_logo"><img src="../img/eid_picture_wall.jpg"/></div>
			 <div id="lamp"><img src="../img/lamp.png"/></div>
			 
			 <a href="picture_wall_2.php"><div id="gallery_forward"></div></a>
			 
			 <div class="gallery_frame_bg" id="school_3"><div class="gallery_frame">
			 <img src="../img/school_3.jpg"/>
			 </div></div>
			 
			 <div class="gallery_frame_bg" id="staff_gallery"><div class="gallery_frame">
			 <img src="../img/staff_gallery.jpg"/>
			 </div></div>
			 
			 <div class="gallery_frame_bg" id="school_2"><div class="gallery_frame">
			 <img src="../img/school_2.jpg"/>
			 </div></div>
			 
			</div>
		</div>';
?>

<?php include_once 'footer.php'; ?>