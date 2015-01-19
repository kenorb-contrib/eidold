<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "English in Dublin | 코스 시간표";
	include_once 'header.php';
?>

<?php
echo'
<div class="info_block_background">
			<div class="info_block" id="time_table_block">
				<h1 class="info_block_title">코스 시간표</h1>
				<div id="tooltip_box"><p id="tooltip_p"></p></div>
				<div id="time_table">
				<p id="dec_p"><span>
				English in Dublin은 모든 영어 학습 요구를 충족하는 과정들을 광범위하게 제공합니다. 아래 테이블을

보시고 어떤 반이 수준에 맞을지 고려해 보세요:
				</p>
					<table cellspacing="1px">
						<tr>
							<th id="first_th">가능한 코스</th>
							<td class="time">아침반 9:00-12:15</td>
							<td class="time">이른 오후반 12:45-16:00</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Elementary">초급반(일반영어)</th>
							<td>::</td>
							<td></td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Pre-Intermediate">하-중급반(일반영어)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Intermediate">중급반(일반영어)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Upper_Intermediate">중상급반(일반영어)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th class="has_tooltip" id="Advanced">고급반(일반영어)</th>
							<td>::</td>
							<td></td>
						</tr>
						<tr>
							<th class="special_th has_tooltip" id="IELTS">IELTS 시험반</th>
							<td class="special_td">::</td>
							<td class="special_td">::</td>
						</tr>
						<tr>
							<th class="special_th has_tooltip" id="CAE">CAE 시험 준비반</th>
							<td class="special_td">::</td>
							<td class="special_td"></td>
						</tr>
						<tr>
							<th class="special_th has_tooltip" id="FCE">FCE 시험 준비반</th>
							<td class="special_td">::</td>
							<td class="special_td">::</td>
						</tr>
					
					</table>
				</div>
			</div>
			</div>';

?>

<?php include_once 'footer.php'; ?>