<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "都柏林英语学校 | 艺术墙";
	include_once 'header.php';
?>

<?php
echo '
		<div class="info_block_background" id="gallery_block">
			<div class="info_block" id="eid_gallery_block">
			 
			 <div id="lle"><img src="../img/lle.png"/></div>
			 
			 <a href="picture_wall_3.php"><div id="gallery_forward"></div></a>
			 <a href="picture_wall_1.php"><div id="gallery_backward"></div></a>

			 <div class="gallery_frame_bg" id="oleg"><div class="gallery_frame">
			 <img src="../img/oleg.jpg"/>
			 </div></div>
			 
			 <div class="gallery_frame_bg" id="snow_fight"><div class="gallery_frame">
			 <img src="../img/snow_fight.jpg"/>
			 </div></div>
			 
			 <div class="gallery_frame_bg" id="student_photo"><div class="gallery_frame">
			 <img src="../img/student_photo.jpg"/>
			 </div></div>
			 
			 <div class="gallery_frame_bg" id="galway"><div class="gallery_frame">
			 <img src="../img/galway.jpg"/>
			 </div></div>
			 
			 <div class="gallery_frame_bg" id="guiness_250"><div class="gallery_frame">
			 <img src="../img/guiness_250.jpg"/>
			 </div></div>
			 
			</div>
		</div>';
?>

<?php include_once 'footer.php'; ?>