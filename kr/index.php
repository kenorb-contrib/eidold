<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "더블린 영어 학교 | 영어연수 | 아일랜드 영어연수 | 더블린 | 더블린 영어어학원 | 더블린 최고의 어학원";
	include_once 'header.php';
?>

<?php 
/*$ip_finder_markup = '<div id="message_box" style="background-color:#fff;border:1px solid #666;height:auto;padding:20px;">
									<img id="close_message" 
									style="float:right;cursor:pointer"  
									src="../img/12-em-cross.png" />
									
								
<!--
Skype \'Chat with me\' button
http://www.skype.com/go/skypebuttons
-->
<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
<a href="skype:english.in.dublin?chat"><img src="../img/skype.png" title="Chat with me" /></a>


									<p>电话<br>
									<strong>座机: 00353 1 6614791</strong><br>
									<strong>手机: 00353 87 231 0686</strong></p>
									<p>电子邮件<br>
									<strong>info@englishindublin.ie</strong> </p>
									<p>
									<img src="../img/sudoku_icon.jpg" / style="margin-right:10px;"><a href="sudoku.php">游戏</a>
									</p>
									<p>
									<img src="../img/online_test_icon.jpg" style="margin-right:10px;"/><a href="online_test.php">免费网络试题</a>
									</p>

								</div>
								
								';
			/*if (getenv("HTTP_X_FORWARDED_FOR")) {
				$pipaddress = getenv("HTTP_X_FORWARDED_FOR");
				$ipaddress = getenv("REMOTE_ADDR");
				//$ip_finder_markup .= "Your Proxy IP address is : ".$pipaddress. " (via $ipaddress)<br /> " ;
			} 
			else {
				$ipaddress = getenv("REMOTE_ADDR");
				//$ip_finder_markup .= "Your IP Address is : ".$ipaddress." <br />";
			}
			
			if ($ipaddress == "" || empty($ipaddress)) {return 0;} 
			else {
				$ips = explode (".", "$ipaddress");
				$ipnumber = ($ips[3] + $ips[2] * 256 + $ips[1] * 256 * 256 + $ips[0] * 256 * 256 * 256);
			}
			$sql = "SELECT code_full FROM `ip-to-country` WHERE ip_start <= ".$ipnumber." AND ip_end >= ".$ipnumber;
			
			try{$db_selected = mysql_select_db(DB_NAME, $this->db);}
			catch(Exception $e){die($e->getMessage());}
			try{$result = mysql_query($sql);}
			catch(Exception $e){die($e->getMessage());}
			
			$country = "";
			while($row = mysql_fetch_array($result)){$country = $row["code_full"];}
			if (empty($country))
			{
				if ($ipnumber == 2130706433) $country = "LOCALHOST";
				else $country = "I'm not sure.";
			}*/
			//$ip_finder_markup .= "Your Country is : ".$country. " </div>";
			/*echo $ip_finder_markup;*/




echo'
<div class="info_block" id="slide_show_block">
					<div id="slide_show">
						
						<img src="../img/2.jpg" title="Our school is located in the centre of Dublin - Merrion Square" />
						<img src="../img/students_form_many_countries.jpg" title="We have students from more than 45 countries"/>
						
						<img src="../img/eid_party.jpg" title="We organize party for every major festival" />
						<img src="../img/1.jpg" title="We Provide an Exellent Study Environment" />
						<img src="../img/football.jpg" title="You can join our football team if you are a fan of sport" />
						<img src="../img/4.jpg" title="We Organize Social Events Throughout the Year" />
						
						
						<div class="caption"><p>저희 어학원은 더블린 시내의 중심지에 위치해 있습니다.- 메리언 스퀘어</p></div>
						<div class="caption"><p>저희 어학원은 45개 다른 국가에서 온 학생들로 이루어져 있습니다.</p></div>
						
						
						<div class="caption"><p>저희 어학원은 정기적으로 파티를 엽니다.</p></div>
						<div class="caption"><p>저희는 학구적인 분위기를 제공합니다.</p></div>
						<div class="caption"><p>스포츠팬이시면 저희 축구팀에 입단 하실 수 있습니다.</p></div>
						<div class="caption"><p>일년내내 많은 이벤트들을 제공합니다.</p></div>
						
						
						<div id="stop_pause"></div>
						<div id="statement">
							<p>
							English in Dublin에 오신 것을 환영합니다. 저희는 학생들에게 우수한 학습

경험을 제공합니다. 저희는 영어를 향상시키는데 도움을 줄 최고의 강사진을 보유하고 있습니다. 또한,

저희는 당신이 더블린 체류를 즐길수 있도록 하기 위하여 최선을 다하겠습니다.
							</p>
							<p>
							궁금한 점이 있으시다면 부담없이 <a href="contact_us.php"><stron>문의</strong></a>하십시오.
							
							</p>
						</div>
					</div>
				</div>';
				
				
			
			
			
			
			
			
			
			
			
			echo '
			
			<div class="info_block" id="promotion_block">
				<table>
				<tr>
				<td id="promotion1">
				<img src="../img/promotion1.png" align="left"/>
				<h1>
					온라인 예약
				</h1>
				<p>
					이제 온라인으로도 예약이 가능합니다. 예약 절차를 최대한 쉽게 만들기 위해, 저희는 당신의 언어를

구사 할 수 있는 직원을 준비하여 최대한 많은 도움을 드릴 것입니다.
				</br>
				<a href="book_online.php">지금 예약…</a>
				</p>
				</td>
				
				<td id="promotion2">
				<img src="../img/promotion2.png" align="left" />
				<h1>
					무료 온라인 테스트
				</h1>
				<p>
					저희 무료 온라인 테스트를 수행하시면 조그만 혜택을 드립니다. 등록하시고 시험만 보시면 됩니다. 시험 다 보시고 난 후, 저희 직원

중 한명과 좀더 세부한 이야기를 나누어 보세요.
				</br>
				<a href="online_test.php">지금 시작…</a>
				</p>
				</td>
				
				<td id="promotion3">
				<img src="../img/promotion3.png" align="left" />
				<h1>
					TESOL 코스
				</h1>
				<p>
					유럽, 중동, 중앙 아시아, 아시아-오세아니아, 중남미. 이 다섯 지역들은 영어선생님들을 아주 많은

필요로 하는 곳들입니다.
				</br>
				<a href="tesol_course.php">상세 보기…</a>
				</p>
				</td>
				
				
				</tr>
				</table>
		
				
			</div>
			';
			
			
			
			
			
				
	
			echo '
			<div class="info_block_background">
			<div class="info_block" id="test_block">
			<table cellpadding="0" cellspacing="0">
			<tr>
				<td id="left_sider">
					<div class="test_title"><h1>추천 동영상</h1></div>
					
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/fVznLc2ditk?keepThis=true&TB_iframe=true&height=320&width=430" title="English in Dublin St Patrick\'s Day 2012" class="thickbox">
					<img src="../img/st_patrick_2012_play_button.jpg"  title="English in Dublin St Patrick\'s Day 2012" alt="picture of English in Dublin\'s students learning Irish dance."/></a>
					</div>
					
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/ULOYpj7gZR4?keepThis=true&TB_iframe=true&height=320&width=430" title="Korean and Venezuela Student\'s Feedback" class="thickbox">
					<img src="../img/english_in_dublin_students.jpg"  title="Korean and Venezuela Student\'s Feedback" alt="picture of English in Dublin\'s students talking about her fun experience with English in Dublin and their life in Ireland"/></a>
					</div>
					
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/YGFli-h8vfI?keepThis=true&TB_iframe=true&height=320&width=430" title="Japanese Student\'s Feedback" class="thickbox">
					<img src="../img/mina_xiaobo.jpg"  title="Japanese Student\'s Feedback" alt="picture of Japanese student talking about her fun experience with English in Dublin"/></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/d9fDq16stJY?keepThis=true&TB_iframe=true&height=320&width=430" title="EID Supports TAM Airline - Guniness" class="thickbox">
					<img src="../img/TAM_airline_guiness.jpg" title="TAM Airline- Guiness" /></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/lZ2Rhry8keA?keepThis=true&TB_iframe=true&height=320&width=430" title="EID Supports TAM Airline - Dublin" class="thickbox">
					<img src="../img/TAM_airline_dublin.jpg" title="TAM Airline- Dublin" /></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/icXcHS7CyVE?keepThis=true&TB_iframe=true&height=320&width=430" title="EID Supports TAM Airline - Temple Bar" class="thickbox">
					<img src="../img/TAM_airline_temple_bar.jpg" title="TAM Airline- Temple Bar" /></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/ZYdzk9eEiqU?keepThis=true&TB_iframe=true&height=320&width=430" title="English in Dublin Culture" class="thickbox">
					<img src="../img/dublin_culture.jpg" title="English in Dublin - Culture" /></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/5emdftOIoos?keepThis=true&TB_iframe=true&height=320&width=430" title="Ireland in 2011" class="thickbox">
					<img src="../img/ireland_2011.jpg" title="Ireland in 2011" /></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/kHBmFfEQjPs?keepThis=true&TB_iframe=true&height=320&width=430" title="Stephen Talking About IELTS" class="thickbox">
					<img src="../img/steven.png" title="Stephen Talking About IELTS" /></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/ClQqB1jg--c?keepThis=true&TB_iframe=true&height=320&width=430" title="Student Passing IELTS with 8" class="thickbox">
					<img src="../img/ielts8.png" title="Student Passing IELTS with 8" /></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/5zY8X6crTUs?keepThis=true&TB_iframe=true&height=320&width=430" title="Education in Ireland" class="thickbox">
					<img src="../img/irish_education.jpg" title="Education in Ireland"/></a>
					</div>
					<div class="icon_li">
					<a href="http://www.youtube.com/embed/L68hwe5X6K8?keepThis=true&TB_iframe=true&height=320&width=430" title="Taiwan Student\'s Feedback" class="thickbox">
					<img src="../img/jerry.jpg"  title="Taiwan Student\'s Feedback"/></a>
					</div>
					
				</td>
				
				
				
				
				<td id="right_sider">
				<div class="test_title"><h1>뉴스 & 이벤트</h1></div>
					<div class="news_frame">
						<img src="../img/olympic-logo.jpg" 
						title="또 다른 다섯개의 국가들이 이번 여름 런던 올림픽을 위해 훈련 거점으로 더블린을 사용하기로

되었습니다." alt="olympic logo"/>
						<h1>또 다른 다섯개의 국가들이 이번 여름 런던 올림픽을 위해 훈련 거점으로 더블린을 사용하기로

되었습니다.</h1>
						<p>
						한국, 폴란드, 베네수엘라, 수리남 및 케이만 군도에서 수영 훈련을 위해 더블린의 국립 수상 경기

센터를 사용한다고 스포츠부 국무 장관이 오늘 아침에 발표했다.</p>
<p>
한국팀은 Abbotstown의 수영장에서 삼월달에 훈련할 것이고 다른 네 국가의 몇몇 수영선수들은

7월달에 훈련을 하게되었습니다…
</p>
<p>
						
						<a href="news_events.php" target="_blank">						
						자세히 보기…
						</a>
						</p>
		
					</div>
				</td>
			</tr>
			</table>
			</div>
			</div>';
			
			
			
			
			/*echo'
			
			<div class="info_block" id="dublin_video_block">
				<table>
				<tr>
				<td>
				<iframe width="560" height="315" src="http://www.youtube.com/embed/i4c7dOJkxdM" frameborder="0" allowfullscreen></iframe>
				
				</td>
				
				<td style="vertical-align:top; padding:0 20px 20px 20px;">
				<h3>Get to Know Dublin Town</h3>
				<p >
					Here\'s a beautiful video specially commissioned for the launch of <a href="http://www.DublinTown.ie" target="_blank">www.DublinTown.ie</a> showcasing the very best of our town and its people.
				</p>
				<p>
				Dublin is a vibrant, modern city and has some special advantages for those seeking to come here to study. Dubliners are friendly and love to talk, and you can easily meet other young people. In this way, Dublin offers many opportunities for students to engage in stimulating and enriching conversations.
				</p>
				
				
				</td>
				</tr>
				</table>
		
				
			</div>
			';*/
?>

<?php include_once 'footer.php'; ?>

