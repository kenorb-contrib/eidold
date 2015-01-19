<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$isMobile = false;
$isBot = false;

$op = strtolower($_SERVER['HTTP_X_OPERAMINI_PHONE']);
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
$ac = strtolower($_SERVER['HTTP_ACCEPT']);
$ip = $_SERVER['REMOTE_ADDR'];

$isMobile = strpos($ac, 'application/vnd.wap.xhtml+xml') !== false
        || $op != ''
        || strpos($ua, 'sony') !== false 
        || strpos($ua, 'symbian') !== false 
        || strpos($ua, 'nokia') !== false 
        || strpos($ua, 'samsung') !== false 
        || strpos($ua, 'mobile') !== false
        || strpos($ua, 'windows ce') !== false
        || strpos($ua, 'epoc') !== false
        || strpos($ua, 'opera mini') !== false
        || strpos($ua, 'nitro') !== false
        || strpos($ua, 'j2me') !== false
        || strpos($ua, 'midp-') !== false
        || strpos($ua, 'cldc-') !== false
        || strpos($ua, 'netfront') !== false
        || strpos($ua, 'mot') !== false
        || strpos($ua, 'up.browser') !== false
        || strpos($ua, 'up.link') !== false
        || strpos($ua, 'audiovox') !== false
        || strpos($ua, 'blackberry') !== false
        || strpos($ua, 'ericsson,') !== false
        || strpos($ua, 'panasonic') !== false
        || strpos($ua, 'philips') !== false
        || strpos($ua, 'sanyo') !== false
        || strpos($ua, 'sharp') !== false
        || strpos($ua, 'sie-') !== false
        || strpos($ua, 'portalmmm') !== false
        || strpos($ua, 'blazer') !== false
        || strpos($ua, 'avantgo') !== false
        || strpos($ua, 'danger') !== false
        || strpos($ua, 'palm') !== false
        || strpos($ua, 'series60') !== false
        || strpos($ua, 'palmsource') !== false
        || strpos($ua, 'pocketpc') !== false
        || strpos($ua, 'smartphone') !== false
        || strpos($ua, 'rover') !== false
        || strpos($ua, 'ipaq') !== false
        || strpos($ua, 'au-mic,') !== false
        || strpos($ua, 'alcatel') !== false
        || strpos($ua, 'ericy') !== false
        || strpos($ua, 'up.link') !== false
        || strpos($ua, 'vodafone/') !== false
        || strpos($ua, 'wap1.') !== false
        || strpos($ua, 'wap2.') !== false;

        $isBot =  $ip == '66.249.65.39' 
        || strpos($ua, 'googlebot') !== false 
        || strpos($ua, 'mediapartners') !== false 
        || strpos($ua, 'yahooysmcm') !== false 
        || strpos($ua, 'baiduspider') !== false
        || strpos($ua, 'msnbot') !== false
        || strpos($ua, 'slurp') !== false
        || strpos($ua, 'ask') !== false
        || strpos($ua, 'teoma') !== false
        || strpos($ua, 'spider') !== false 
        || strpos($ua, 'heritrix') !== false 
        || strpos($ua, 'attentio') !== false 
        || strpos($ua, 'twiceler') !== false 
        || strpos($ua, 'irlbot') !== false 
        || strpos($ua, 'fast crawler') !== false                        
        || strpos($ua, 'fastmobilecrawl') !== false 
        || strpos($ua, 'jumpbot') !== false
        || strpos($ua, 'googlebot-mobile') !== false
        || strpos($ua, 'yahooseeker') !== false
        || strpos($ua, 'motionbot') !== false
        || strpos($ua, 'mediobot') !== false
        || strpos($ua, 'chtml generic') !== false
        || strpos($ua, 'nokia6230i/. fast crawler') !== false;
		
		if($isMobile && $_GET['sourse']!='from_mobile'){
			header('Location: mobile/index.php');
			exit;
		}
		

?>



<?php include_once("analyticstracking.php") ?>
<?php	
	include_once '../sys/core/init.inc.php';
	$page_title = "English in Dublin | Home | Learn English in The Best English Language School in Ireland.";
	include_once 'index_header.php';
?>

	

<?php		

			$event_list_time = 'May 2013';
			
			echo'
<div class="info_block" id="slide_show_block">
					<div id="slide_show">

						<img src="img/cca.jpg" title="College of Career Advancement" alt="Students enjoy our new CCA course."/>
						<img src="img/summer_activity.jpg" title="Our students like to study in the park near our school" alt="Our students like to study in the park near our school"/>
						<img src="img/2.jpg" title="Our school is located in the centre of Dublin - Merrion Square" alt="Picture of Merrion Square Dublin"/>
						<img src="img/1.jpg" title="We Provide an Exellent Study Environment" alt="Picture of students doing their homework in our study room"/>
						
						
						<div class="caption"><p>CCA is a partner company of EID.
CCA will begin new evening courses from 23 September.
<a href="http://www.ccaireland.com" target="_blank">Read more</a></p></div>
						<div class="caption"><p>Our students like to study in the park near our school.</p></div>
						<div class="caption"><p>Our school is located in the centre of Dublin - Merrion Square</p></div>
						<div class="caption"><p>We Provide an Excellent Study Environment</p></div>
						
						
						
						
						<div id="stop_pause"></div>
						<div id="statement">
							<p>
							Welcome to <strong style="color:#ff0;">English in Dublin</strong>.
								We give our students an excellent learning experience. We have the best teaching 									team to improve your english. We also do our best 
								to make sure you enjoy your stay in Dublin.</p>
						</div>
					</div>
				</div>';
				
				
			
			
			include_once 'price_list.php';
			
			
			$full_list = explode("||", $full_time_price);
			
			echo '
				<div class="info_block">
					<table class="home-page-price-table">
					<tr>
						<th>Duriation</th>
						<th>Tuition Fees 15 hrs/week</th>
						<th>Tuition Fees 21 hrs/week</th>
						<th>Tuition Fees 24 hrs/week</th>
						<th>Tuition Fees 27 hrsweek</th>
						<th>Tuition Fees 30 hrs/week</th>
						<th>Registration Fee</th>
					</tr>';
				for($i = 0 ; $i<4 ; $i++)
				{
					if($i%2 == 0) echo '<tr class="home-page-even-row">';
					else echo '<tr>';
					$row = explode("::",$full_list[$i]);
					foreach($row as $r)
					{
						echo '<td class="home-page-price-row">'.$r.'</td>';
					}
					echo '</tr>';
				}
					
			echo '	
					
					</table>	
					
				<a href="http://englishindublin.com/pdf/eid_price_list_2014.pdf" target="_blank"><div class="eid_button">See our full price table</div></a>
				</div>';
			
			
			
			
			$video_link = 'http://www.youtube.com/embed/fVznLc2ditk';
			
			echo '
			
			<div class="info_block" id="test_block">
			<table cellpadding="0" cellspacing="0">
			<tr>
				<td id="left_sider">
					<div class="test_title"><h1>featured videos</h1></div>
					
					<div class="icon_li">
					<a href="'.$video_link.'?keepThis=true&TB_iframe=true&height=320&width=430" title="English in Dublin St Patrick\'s Day 2012" class="thickbox">
					<img src="img/st_patrick_2012_play_button.jpg"  title="English in Dublin St Patrick\'s Day 2012" alt="picture of English in Dublin\'s students learning Irish dance."/></a>
					</div>
					
					
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/-2TG3_xz3S4?keepThis=true&TB_iframe=true&height=320&width=430" title="St Patricks Party 2014 Kroean Students Performance." class="thickbox">
					<img src="img/st-patricks-party-2014-korean-students-performance.jpg"  title="St Patricks Party 2014 Kroean Students Performance." alt="St Patricks Party 2014 Kroean Students Performance."/></a>
					</div>
					
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/ULOYpj7gZR4?keepThis=true&TB_iframe=true&height=320&width=430" title="Korean and Venezuela Student\'s Feedback" class="thickbox">
					<img src="img/english_in_dublin_students.jpg"  title="Korean and Venezuela Student\'s Feedback" alt="picture of English in Dublin\'s students talking about her fun experience with English in Dublin and their life in Ireland"/></a>
					</div>
					
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/YGFli-h8vfI?keepThis=true&TB_iframe=true&height=320&width=430" title="Japanese Student\'s Feedback" class="thickbox">
					<img src="img/mina_xiaobo.jpg"  title="Japanese Student\'s Feedback" alt="picture of Japanese student talking about her fun experience with English in Dublin"/></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/d9fDq16stJY?keepThis=true&TB_iframe=true&height=320&width=430" title="EID Supports TAM Airline - Guniness" class="thickbox">
					<img src="img/TAM_airline_guiness.jpg" title="TAM Airline- Guiness" /></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/lZ2Rhry8keA?keepThis=true&TB_iframe=true&height=320&width=430" title="EID Supports TAM Airline - Dublin" class="thickbox">
					<img src="img/TAM_airline_dublin.jpg" title="TAM Airline- Dublin" /></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/icXcHS7CyVE?keepThis=true&TB_iframe=true&height=320&width=430" title="EID Supports TAM Airline - Temple Bar" class="thickbox">
					<img src="img/TAM_airline_temple_bar.jpg" title="TAM Airline- Temple Bar" /></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/ZYdzk9eEiqU?keepThis=true&TB_iframe=true&height=320&width=430" title="English in Dublin Culture" class="thickbox">
					<img src="img/dublin_culture.jpg" title="English in Dublin - Culture" /></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/5emdftOIoos?keepThis=true&TB_iframe=true&height=320&width=430" title="Ireland in 2011" class="thickbox">
					<img src="img/ireland_2011.jpg" title="Ireland in 2011" /></a>
					</div>
					
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/ClQqB1jg--c?keepThis=true&TB_iframe=true&height=320&width=430" title="Student Passing IELTS with 8" class="thickbox">
					<img src="img/ielts8.png" title="Student Passing IELTS with 8" /></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/5zY8X6crTUs?keepThis=true&TB_iframe=true&height=320&width=430" title="Education in Ireland" class="thickbox">
					<img src="img/irish_education.jpg" title="Education in Ireland"/></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/L68hwe5X6K8?keepThis=true&TB_iframe=true&height=320&width=430" title="Taiwan Student\'s Feedback" class="thickbox">
					<img src="img/jerry.jpg"  title="Taiwan Student\'s Feedback"/></a>
					</div>
					
				</td>
				
				
				
				
				<td id="right_sider">
				<div class="test_title"><h1>English in Dublin 2014</h1></div>
				
				
				<div class="discover_ireland">
						
						<iframe width="100%" height="290" src="http://www.youtube.com/embed/hb0XfkD6wEU" frameborder="0" allowfullscreen></iframe>
				</div>
				
				
					
				</td>
			</tr>
			</table>
			</div>';
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			echo '
			
			<div class="info_block" id="promotion_block">
				
				<!--<div class="promotion">
				<a href="pay_online.php" target="_blank"><img src="img/pay_online.jpg" align="left"/></a>
				<h1>
					Book and Pay Online Now !
				</h1>
				<p>
					Our online payment system is the faster, safer way to pay your course fees. You can now <a href="pay_online.php" target="_blank">make an online payment</a> without bank charges.
					If you still have doubts, just <a href="contact_us.php">contact us</a>.
				
				</p>
				</div>-->
				
				
				
				
			
				
				
				
				
				
				
				
				
				<div class="promotion">
				<img src="img/promotion2.png" align="left" />
				<h1>
					<span style="color:red;">Free</span> Online Tests
				</h1>
				<p>
					Get FREE credit by doing our FREE online tests. You can get 5 Euro credit for each test you manage to pass. When you finish, talk to our staff with
					details.
				
				<a href="online_test.php">Start Now ...</a>
				</p>
				</div>
				
				
				
				
				<div class="promotion">
				<img src="img/promotion3.png" align="left" />
				<h1>
					IELTS Expert
				</h1>
				<p>
					Most universities now require 6.5+ in the IELTS exam. We have the best IELTS experts to help you to pass the exam with high scores in a very short time.  Some of our students have achieved a score of 8. 
					<a href="exam_courses.php">See more details...</a>
				</p>
				</div>
				
				
				
				
				<div class="promotion">
				<img src="img/activity.jpg" align="left" />
				<h1>
					Activities
				</h1>
				<p>
				We organize a bus tour every week and parties for every festival. Our aim is to let our students enjoy their stay when they are in Ireland and have fun while studying English.	
			
				<a href="contact_us.php">call us now ...</a>
				</p>
				</div>
				
				
				<div class="promotion">
				<img src="img/Accommodation.jpg" align="left" />
				<h1>
					Accommodation
				</h1>
				<p>
					Our host families many of whom have worked with us since we started in business treat every student as their own child. Every host family has a 24/7 helpline so that our students can always get help from our staff in case of emergency.
			
				
				</p>
				</div>
				
				
				
				
				
				
				<div class="promotion">
				<a href="http://www.ccaireland.com" target="_blank"><img src="img/cca_promotion.jpg" align="left" /></a>
				<h1>
					New CCA Courses
				</h1>
				<p>
CCA is a partner company of EID.
CCA will begin new evening courses from 23 September.
<a href="http://www.ccaireland.com" target="_blank">Read more ...</a>
				
				</p>
				</div>
				
				
				
				<div class="promotion">
				<img src="img/english_in_dublin_football_club.jpg" align="left" />
				<h1>
					Football at EID
				</h1>
				<p>
					
				Founded in 2004, EID FC has become a very successful club in Dublin football leagues, playing against Irish teams. Season 2013-14 in the UCFL  begins on 17 August 2013. Visit <a href="http://www.englishindublin.com/football" target="_blank">EID FC website</a>  or our <a href="https://www.facebook.com/englishindublinfc" target="_blank">Facebook Page</a>.
				
				</p>
				</div>
				
				
				
				
				
				
				<br style="clear:both;" />
				
			
		
				
			</div>
			';
			
			
			
			
			
				
			
				
			
			
			
			
			
			
			
			
			
			
			
			echo '
			<div class="info_block" id="ne_block">
			<div id="ne_left_block">
					
					<div class="news_frame">

						<img src="img/ACEL2014.jpg" title="ACELS award for English in Dublin 2014" align="left"/>
						<h1>ACELS Certificate 2014 English in Dublin</h1>
						<p>
						English in Dublin is, again in 2014, recognised by ACELS, a service of Quality and Qualifications Ireland, for English language teaching.
						</p>
						<p>
						<a href="http://www.acels.ie/" target="_blank">Find out more about ACELS</a>
						</p>
						
					</div>
					
					
					
					
					
					
					
					
					
					
					<br style="clear:both;" />
					</div>
					
					
					
					<div id="ne_right_block">

						<div class="news_frame">
						<a href="http://www.youtube.com/embed/YqT6TX6dFHU?keepThis=true&TB_iframe=true&height=320&width=430" title="Visit Dublin is supported by English in Dublin" class="thickbox">
						<img src="img/visit_dublin_video.jpg" title="Visit Dublin is supported by English in Dublin" align="left"/>
						</a>
						<h1>Visit Dublin</h1>
						
						<p>
						Dublin, a city on the coast, offers the visitor both an exciting urban and exhilarating coastal experience all within twenty minutes of the city centre. With direct access, a wide range of accommodation options, unique urban and coastal experiences and visitor attractions not to mention an international reputation for festivals and events there has never been a better time to visit Dublin.
						</p>

					</div>
						
					
					<br style="clear:both;" />
					
				</div>
				<br style="clear:both;" />
				
			</div>

			
			';
			
			
			
			
?>

<?php include_once 'footer.php'; ?>

