<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "English in Dublin | 시험반";
	include_once 'header.php';
?>

<?php


$markup = '
			<div class="info_block_background">
			<div class="info_block first_info_block" id="exam_courses_block">
				<h1 class="info_block_title">시험반</h1>
					<table class="info_table" cellspacing="0px">
						<tr>
							<td><img src="../img/stephen.jpg"></td>
							<td class="text_td"><p><span>English in Dublin은 현재 다음의 시험들을 위한 지원 및 준비를 제공합니다</span></p>
							<ul>
							<li>IELTS (International English Language Testing System, 캠브리지 ESOL, 영국 / 호주)</li>
							<li>FCE (First Certificate in English, 캠브리지 ESOL, 영국)</li>
							<li>CAE (Certificate in Advanced English, 캠브리지 ESOL, 영국)</li>
							<!--<li>PET (Preliminary English Test, Cambridge ESOL, UK</li>-->
							<li>TIE (Test of Interactive English, ACELS 아일랜드)</td></li>
							</ul>
						</tr>
					</table>
			</div>
			</div>';
			
			$markup .= '
			<div class="info_block_background">
			<div class="info_block exams">
							<h1>IELTS</h1>
							<table>
								<tr>
									<td>
										<a class="video_trigger" href="http://www.youtube.com/watch?v=kHBmFfEQjPs">
											<img src="../img/steven.png">
										</a>
									</td>
									<td>
										
				<p>저희 선생님 중 하나인 스티븐 브루스가 IELTS 시험에 대한 얘기하는 것을 보십시오 – IELTS가 왜

중요한 것인지, 그리고 왜IELTS 시험 준비 과정에 참석하는 것이 좋은지 들어보세요.
										</p>
									</td>
								</tr>
								<tr>
									<td>
										<a class="video_trigger" href="http://www.youtube.com/watch?v=ClQqB1jg--c">
											<img src="../img/ielts8.png">
										</a></td>
									<td>
										<p>Leticia Pinhero Correa, 20세, 브라질의 상파울로 출신. 그녀는 IELTS 시험에서 8점 받은 것을 축하하고

있습니다. 더블린에 오기전, 그녀는 대학교에서 생물학을 공부했고 이제 공부를 마치러 돌아갑니다.

미래에는 동물, 환경과 야생을 아프리카에서 느껴보고 싶다고 합니다.</p>

<p>그녀는 더블린에 2009년 4월 16일에 도착하여 A2레벨 즉 , 하-중급에서 시작 다음 레벨로 차츰

진행하였습니다.</p> 

<p>그녀는 2009년 12월에 FCE에서 B를 받았고 그녀는 시력을 확인차 4월에 IELTS시험을 봤습니다.</p> 

<p>그녀는 시험 성공의 이유를 압박받지않고 차분히 본 곳에서 찾았지만, 우리는 그녀가 Englsih in Dublin

에서의 시간을 유용하게 사용하였기 때문이라고 생각합니다.</p>
										</p>
									</td>
								</tr>
								<tr>
									<td>
										<img src="../img/student.jpg">
									</td>
									<td>
										<p>
										Stefania는 작년 11월에 대학에서 국제 관계완 인권를 공부하다가 졸업후 그녀에게 맞는 석사과정을

유럽에서 찾기 시작했다. 안타깝게도, 그 당시에 영어 실력이 매우 녹슨 상태였기 때문에 그녀는

IELTS시험에서 유렵대학들이 입학을 위해 요구하는 점수를 못 받을까 두려워했다.</p>
					
					<p>
					그런 이유로 그녀는 더블린에 한달간 머물게 되었고 그 동안 영어를 다시 배우고 IELTS과정을 들었다.

그녀는 English in Dublin을 택했다. 이것은 English in Dublin이 풀타임 IELTS 코스를 제공하기

때문이었고 또한 놀라운 서비스(인터넷 접속, 스터디룸, 유연한 시간표, 매우 경쟁력 있는 가격과

중심위치 등)을 제공했기 때문이다.
					</p>
					
					<p>EID는 그녀에게 국제적이고 도전적인 환경에서 영어를 향상시킬 수 있는 독특한 기회를 주었습니다.
										</p>
									</td>
								</tr>
							</table>
			</div>
			</div>';
			
			
			
			$markup .= '
			<div class="info_block_background">
			<div class="info_block exams">
				<h1>First Certificate in English (FCE)</h1>
				<p>FCE (First Certificate in English)는 상위 중급 (B2)의 레벨에서 공부하며 일상 언어 작성 및 영어 대화를

할 수있는 사람들을위한 시험입니다. 그것은 영어시험 중 가장 인기있는 시험 중 하나입니다. 그것은

널리 비즈니스 및 학습 용도로 세계적으로 인정받는 인정서입니다.</p>
			</div>
			</div>';
			
			
			$markup .= '
			<div class="info_block_background">
			<div class="info_block exams">
				<h1>CAE (Certificate in Advanced English)</h1>
				<p>CAE(Certificate in Advanced English)는 고읍 영어를 사용하는 사람들을 위한 시험입니다.이 시험은

대부분의 전문과 사회적 목적을 위해 영문작성과 대화를 할 수 있는 학생들을 위한 시험입니다. 그것은

널리 직장이나 학업 목적으로 쓸 수 있게 인정 받고 있습니다.</p>

		<p>
		English in Dublin에서는 시험 합격에 필요한 기본 문법 사항과 어휘를 다루고 있습니다. 코스가

진행되는 동안 과거 시험들과 특수소재를 이용해 연습 시험을 봅니다.
		</p>
		<p>
		코스가 끝날때 EID는 최종적으로 모의고사를 준비해 학생들이 본시험 전에 무엇이 더 필요한지 알게

해줍니다.
		</p>
			</div>
			</div>';
			
			
			$markup .= '
			<div class="info_block_background">
			<div class="info_block exams">
				<h1>Test of Interactive English (TIE)</h1>
				
				<p>English in Dublin은 TIE 시험을 치룰 수 있도록 등록된 곳입니다. TIE시험은 두 부분으로 나뉩니다-

말하기 시험(OTIE)와 필기시험(WTIE). 구술시험에서는 당신의 프로젝트를 소개합니다. 당신의

책이나 뉴스 기사 중 하나를 파트너에게 말하고 시험관이 당신에게 드릴 몇 가지 자료를 토대로

파트너와 의사 결정을 해야합니다. 작문 시험에서는 두개의 글을 작성하셔야 합니다. 첫번째로는

책이나 뉴스기사에 대하여 써야하고, 두번째로는 준비 못한 것에 대하여 써야 합니다. TIE의 중요점:
				</p><br>
				
				<p>
				<ul>
				<li>그것은 아일랜드의 교육과 과학 부서에 의해 인정되고 있습니다.</li>
				<li>그것은 영어 학교 (ACELS)에 대한 자문위원회에서 관리하고 있습니다.</li>
				<li>그것은 학습자 중심의 시험이다.</li>
				<li>그것은 연령, 문화 또는 교육 배경에 좌우되지 않고 학생의 요구와 이익을 인식하고 수용할 수 있도록

설계되었습니다.</li>
				<li>그것은 학생의 의사 소통 능력을 향상시키는 작업 및 활동을 포함한다.</li>
				<li>그것은 교실에서 그 동료들과 의미있는 대화를 하고 또한 나아가 지역사회와도 교류할 수 있게

해줍니다.</li>
				<li>그것은 외국 학생들이 아일랜드의 문화 예를들어 음악, 문학, 역사, 스포츠, 음식, 예술,그리고

아일랜드 사람들에 대해 알아볼 수 있는 좋은 기회입니다.</li>
				<li>응시자는 일년내내 응시할 수 있고, 자신에게 적합한 시간에 시험을 치를 수 있습니다.</li>
				<li>English in Dublin에서는,학생들이 아일랜드의 문화를 더 깊이 알게 하도록 최선을 다하고 아일랜드의

생활 방식에 잘 스며 들 수 있도록 할 것입니다.</li>
				</ul>
				</p>
			</div>
			</div>';
			
			
			
			echo $markup;

?>

<?php include_once 'footer.php'; ?>