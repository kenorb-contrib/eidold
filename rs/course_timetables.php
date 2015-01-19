<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "English in Dublin | Course Timetables";
	include_once 'header.php';
?>

<?php
echo'
<div class="info_block_background">
			<div class="info_block" id="time_table_block">
				<h1 class="info_block_title">Course Timetables</h1>
				<div id="tooltip_box"><p id="tooltip_p"></p></div>
				<div id="time_table">
				<p id="dec_p"><span>Школа английского языка «English in Dublin» предлагает широкий спектр курсов, чтобы удовлетворить все Ваши потребности в английском языке. В таблице ниже представлены Курсы и соответствующее им Время Занятий в нашей школе.</p>
				
					<table cellspacing="1px">
						<tr>
							<th id="first_th">Курсы</th>
							<td class="time">Утренние занятия 9:00-12:00</td>
							<td class="time">Дневные занятия 12:30-13:30</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Elementary">Elementary (General English)</th>
							<td>::</td>
							<td></td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Pre-Intermediate">Pre-Intermediate (General English)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Intermediate">Intermediate (General English)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Upper_Intermediate">Upper Intermediate (General English)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Advanced">Advanced (General English)</th>
							<td>::</td>
							<td></td>
						</tr>
						<tr>
							<th class="special_th has_tooltip" id="IELTS">IELTS Exam Preparation</th>
							<td class="special_td">::</td>
							<td class="special_td">::</td>
						</tr>
						<tr>
							<th class="special_th has_tooltip" id="CAE">CAE Exam Preparation</th>
							<td class="special_td">::</td>
							<td class="special_td"></td>
						</tr>
						<tr>
							<th class="special_th has_tooltip" id="FCE">FCE Exam Preparation</th>
							<td class="special_td">::</td>
							<td class="special_td">::</td>
						</tr>
					
					</table>
				</div>
			</div>
			</div>';

?>

<?php include_once 'footer.php'; ?>