<?php	
	include_once '../../sys_ch/core/init.inc.php';
	$page_title = "더블린 날씨";
	include_once 'header.php';
?>

<?php
echo '
	
			<div class="info_block first_info_block" id="dublin_weather_block">
				<h1 class="info_block_title">더블린 날씨</h1>
					<table class="info_table" cellspacing="0px">
						<tr>
							<td><img src="../img/weather.jpg"></td>
							<td class="text_td">
							<p>
							
						섬이 많은 멕시코만류의 영향을 받는 아일랜드의 기후는 온화한 편입니다. 겨울에도 기온이
영하로 떨어지는 일이 거의 없으며, 눈이 내리는 날은 매우 드문 편입니다.
							</p>
							
							<p>
							12월에서 2월 사이가 가장 춥고 비가 많이 오는 계절이지만, 평균 기온은4-7도 정도됩니다.

7-8월이 가장 기온이 높이 올라가지만 14-16도의 날씨가 일반적이고, 22도 이상으로 올라갈

때는 드문 편입니다.
							</p>

							</td>
						</tr>
					</table>
			</div>';
?>

<?php include_once 'footer.php'; ?>