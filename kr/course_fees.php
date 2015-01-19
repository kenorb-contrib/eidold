<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "English in Dublin | 학비";
	include_once 'header.php';
?>

<?php


	include_once '../price_list.php';
			$full_time_price_split = explode("||",$full_time_price);
			$part_time_price_split = explode("||",$part_time_price);
			 $markup .= '
			 <div class="info_block_background">
		<div class="info_block first_info_block" id="fees_block">
			<h1 class="info_block_title">학비2013</h1>
				<table class="info_table" cellspacing="0px">
					<tr>
						<td><img src="../img/fees.jpg"></td>
						<td class="text_td">
						<p>
						English in Dublin은 더블린의 영어 학교중 우수한 명성을 자랑하는데 매우 경쟁력 있는 가격을

제공합니다. 저희 모든 교사가 영어 네이티브 스피커입니다. 최소한 2년의 강사 겸험이 있고 여러분의

영어 학습 목표를 달성할 수 있도록 도와줄 수 있는 모든 자격을 갖추었습니다.
						</p>
					</tr>
				</table>
		</div>
		</div>';
			$markup .= '<div class="info_block_background">
			<div class="info_block" id="fees_full_time_table">
							<h1 class="info_block_title">풀타임 요금</h1>
							<table class="fees_table">';
			for ($i = 0; $i < count($full_time_price_split)-1; ++$i){
				$row = explode("::",$full_time_price_split[$i]);
				if ($i%2 == 0) $markup .= '<tr class="tr_even">';
				else $markup .= '<tr class="tr_odd">';
				for($j = 0; $j < count($row); $j++){
					if ($i%11 == 0)
					$markup .= '<th>'.$row[$j].'</th>';
					else
					$markup .= '<td>'.$row[$j].'</td>';
				}
				$markup .= '</tr>';
			}
			
			$markup .='</table></div></div>';
			
			$markup .= '<div class="info_block_background"><div class="info_block" id="fees_part_time_table">
							<h1 class="info_block_title">파트 타임 요금<br>COURSE TIMES : A) 12.30 – 15.30 or B) 18.30 – 21.30</h1>
							<table class="fees_table">';
			for ($i = 0; $i < count($part_time_price_split)-1; ++$i){
				$row = explode("::",$part_time_price_split[$i]);
				if ($i%2 == 0) $markup .= '<tr class="tr_even">';
				else $markup .= '<tr class="tr_odd">';
				for($j = 0; $j < count($row); $j++){
					if ($i%11 == 0)
					$markup .= '<th>'.$row[$j].'</th>';
					else
					$markup .= '<td>'.$row[$j].'</td>';
				}
				$markup .= '</tr>';
			}
			
			$markup .='</table></div></div>';
			echo $markup;
?>

<?php include_once 'footer.php'; ?>