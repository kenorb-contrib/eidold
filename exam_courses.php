<?php	
	include_once '../sys/core/init.inc.php';
	$page_title = "English in Dublin | Exam Courses";
	include_once 'header.php';
?>

<?php


$markup = '
			<div class="info_block_background">
			<div class="info_block first_info_block" id="exam_courses_block">
				<h1 class="info_block_title">Examination Courses</h1>
					<table class="info_table" cellspacing="0px">
						<tr>
							<td><img src="img/john_teaching.jpg"></td>
							<td class="text_td"><p><span>English in Dublin currently provides assistance and preparation for the following exams:</span></p>
							<ul>
							<li>IELTS (International English Language Testing System, Cambridge ESOL, UK/Australia)</li>
							<li>FCE (First Certificate in English, Cambridge ESOL, UK)</li>
							<li>CAE  (Certificate in Advanced English, Cambridge ESOL, UK)</li>
							<!--<li>PET (Preliminary English Test, Cambridge ESOL, UK</li>-->
							<li>TIE (Test of Interactive English, ACELS Ireland)</td></li>
							</ul>
						</tr>
					</table>
			</div>
			</div>';
			
			$markup .= '
			<div class="info_block_background">
			<div class="info_block exams">
							<h1>International English Language Testing System</h1>
							<table>
								
								<tr>
									<td>
										<a class="video_trigger" href="http://www.youtube.com/watch?v=ClQqB1jg--c">
											<img src="img/ielts8.png">
										</a></td>
									<td>
										<p>Leticia Pinhero Correa, aged 20, from Sao Paolo, Brazil, is celebrating an overall Grade 8 in the IELTs exam. Before coming to Dublin, Leticia was studying Biology at university and is now returning to completing her studies as she wants to work with animals, the environment and wildlife - in Africa!</p>

<p>Leticia arrived in Dublin on 16 April, 2009, she started learning English at A2 level, pre-intermediate, then progressed through the levels.</p> 

<p>She got a B in FCE in December 2009, and then she wanted to have the IELTS just to see how she would do and took the exam in April.</p> 

<p>Leticia puts her exam success down to remaining calm under pressure but we think she made the very most of her time here.</p>
										</p>
									</td>
								</tr>
								<tr>
									<td>
										<img src="img/student.jpg">
									</td>
									<td>
										<p>
										Stefania graduated in International Relations and Human Rights last November and I immediately started looking for an International Master in Europe that could suit me well. Unfortunately, at that time my English war very rusty and I feared I wouldn\'t be able to get the IELTS certificate that all European Universities require for the admission.</p>
					
					<p>For this reason I decided to travel to Dublin and to stay there one month, in order to brush up on my English and to attend an IELTS course. I chose the "English in Dublin" School since it offers a full time IELTS course and amazing services (Internet connection, study rooms, flexible timetables, highly competitive prices and a central position).</p>
					
					<p>EID gave me a unique opportunity to improve my English in a wonderful international and challenging environment!
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
				<p>FCE (First Certificate in English) is an exam for people who are able to use everyday written and spoken English at an upper-intermediate level (B2). It is one of the most popular exams in English as a foreign language. The certificate is widely recognized around the world for both business and study purposes.</p>
			</div>
			</div>';
			
			
			$markup .= '
			<div class="info_block_background">
			<div class="info_block exams">
				<h1>Certificate in Advanced English (CAE)</h1><p>CAE (Certificate in Advanced English) is an exam for advanced users of English. This exam is aimed at people who can use written and spoken English for most professional and social purposes. It is widely recognized for work or study purposes.<br><br>English in Dublin\'s course syllabus covers the main grammar points and vocabulary needed to pass the exam. During the course extensive exam practice is done by using past papers and specialized material.<br><br>At the end of the course EID organizes a practice exam which will help students plan their final revision before the exam.</p>
			</div>
			</div>';
			
			
			$markup .= '
			<div class="info_block_background">
			<div class="info_block exams">
				<h1>Test of Interactive English (TIE)</h1><p>English in Dublin is a registered centre for TIE Examinations.The TIE test is in two parts - a speaking test (OTIE) and a written test (WTIE). In the oral test you present your project, talk about either your book or news story and talk to your partner to reach a decision based on some material the examiner will give you. In the writing test you are required to produce two pieces of writing. You write about either your book or news story for the first task and for the second you write something which you have not prepared.Key points about TIE :</p><br><p><ul><li>It is recognised by the Department of Education and Science, Ireland.</li><li>It is administered by the Advisory Council for English Language Schools (ACELS).</li><li>It is a learner-centred exam.</li><li>It is flexible, designed to recognise and accommodate the needs and interests of each learner whatever their age, culture or educational background.</li><li>It involves tasks and activities which improve candidates\' communicative competence.</li><li>It involves meaningful interaction with candidates and their peers in the classroom as well as with the target language community in which they find themselves.</li><li>It is an excellent opportunity for foreign students to find out more about Irish culture, including music, literature, history, sport, food, art and Irish people themselves.</li><li>Candidates can enter for the test all year round and take the test at a time suitable for them.</li><li>At English in Dublin, we do our best to enable students to increase their awareness of the culture of Ireland and to become immersed in our way of life.</li></ul></p>
			</div>
			</div>';
			
			
			
			echo $markup;

?>

<?php include_once 'footer.php'; ?>