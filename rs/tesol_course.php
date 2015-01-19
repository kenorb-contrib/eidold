<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "English in Dublin | TESOL Course";
	include_once 'header.php';
?>

<?php


echo '
			<div class="info_block_background">
				<div class="info_block first_info_block">
					<h1 class="info_block_title">TESOL</h1>
					<table cellspacing="0px" style="width:600px; margin:20px auto 20px auto; font-size:12px;">
						<tr>
							
							<td style="vertical-align:top; padding:20px 20px 50px 20px;">
							
							<p>
							TESOL – это аббревиатура от Teaching English to Speakers of Other Languages (Преподавание Английского Языка Как Иностранного). Существует широкое разнообразие квалификаций TESOL, от коротких интенсивных курсов длиной в несколько недель до дипломов бакалавра и магистра. Квалификация TESOL откроет двери к трудоустройству в любой части света, где необходим английский язык
							</p>
							<p>
За последние 25 лет школа английского языка «English in Dublin» приобрела широкий круг контактов во многих частях мира. Мы можем помочь Вам найти работу с хорошими условиями.
							</p>
							<p>
Многие преподаватели английского языка начинали свою работу с начального Сертификата. После приобретения  опыта, они успешно получали диплом, и даже степень магистра в TESOL.
							</p>
							<p>
С нашим TESOL сертификатом, мы поможем вам получить первую работу.
</p>
<p>
Если Вы хотите сотрудничать с нами, свяжитесь с нашими менеджерами.

							</p>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			
			<div class="info_block_background">
				<div class="info_block" id="tesol_block">
					<h1 class="info_block_title">most frequently asked questions</h1>
					<table cellspacing="0px" style="width:800px; margin:20px auto 20px auto; font-size:12px;">
						<tr>
							<td>
							<h3>What is TESOL?</h3>
							<p>TESOL (also known as TEFL) is the acronym for Teaching English to Speakers of Other Languages, and taking a TESOL course is your passport to a world of travel and adventure, teaching English abroad. There is a tremendous demand for TESOL-qualified teachers worldwide, with job opportunities in just about every country around the globe.
							</p>
							
							<h3>Who can take a TESOL course?</h3>
							<p>TESOL courses are open to everyone with a good level of English, whether native or non-native. There is no requirement to have any previous teaching experience or specialized qualifications. Each application for one of our TESOL courses is given full consideration. We welcome all applications from suitable candidates.
							</p>


							<h3>Course Fee</h3>
							<p>
							Euro 700. This includes the standard coursebook, all extra materials,  the final examination and the TESOL Certificate. On enrolment, each trainee receives a personal copy of the coursebook, which is <strong>The CELTA Course</strong>, written by Scott Thornbury and Peter Watkins, published by Cambridge University Press. 
							</p>
							
						
							
							
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			
			<div class="info_block_background">
				<div class="info_block first_info_block">
					<h1 class="info_block_title">TESOL Course Timetable ';
					
					
			include_once('../tesol_timetable.php');	
			echo'
					
				</div>
			</div>
			
			
			
			';
?>

<?php include_once 'footer.php'; ?>