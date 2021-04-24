<?php include(".\db_conn.php");//連接資料庫 ?>

<!DOCTYPE html5>
<html>
<head>

<script type="text/javascript" src=".\jquery-3.6.0.min.js">//導入jquery</script>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>進出貨系統</title>
    <script src="https://kit.fontawesome.com/f21df058bc.js" crossorigin="anonymous"></script>
	<style> 
		table,th,td {
			border: 1px solid purple;
			border-collapse: collapse;
			text-align: center;
		}
		th {
			background-color: purple;
			color: #FFF;
			font-family: 微軟正黑體;
		}
		table tr:nth-child(odd) {
			background-color: #DDD;
		}
		table tr:nth-child(even) {
			background-color: #CCBBFF;
		}
	</style>
</head>

<body>
	<div class="headerPage">
		<?php
			$title='進貨';
			include('header.php');
		?>
	</div> 
	<div class="main" style="width:100%; display:flex; flex-direction:row;">
		<div class="sidePage"></div>
		
		<table border="1" width="100%">
				
			<tr>
				<th>單號</th>
				<th>貨名</th>
				<th>單價</th>
				<th>數量</th>
				<th>總金額</th>
				<th> </th>
			</tr>
			<!-- 去資料庫拉單號，如果沒有就從1開始

				<select>
					<option>請選擇貨物</option>
					<option>Dog</option>
					<option>Cat</option>
					<option>Hamster</option>
					<option>Goldfish</option>
				</select>
				
				(輸入單價)

				(輸入數量)
				
				(總價自動代入)

				button 新增     選單必選 然後新增一行
				button 確認進貨 跳出確認視窗 -->
			<tr>
				<td>去資料庫拉單號，如果沒有就從1開始</td>
				<td>
					<select>
						<option>請選擇貨物</option>
						<option>Dog</option>
						<option>Cat</option>
						<option>Hamster</option>
						<option>Goldfish</option>
					</select>
				</td>
				<td>
					<input style="text-align:right;" id="inPrice" type="text" oninput="value=value.replace(/^(0+)|[^\d]+/g,'')" onchange="" required>
				</td>
				<td>
					<input style="text-align:right;" id="amount" type="text" oninput="value=value.replace(/^(0+)|[^\d]+/g,'')" text-align="right" required>
				</td>
				<td id="totalPrice"></td>
				<td>
					<button type="button" onclick="">新增</button>
				</td>
			</tr>
			<tr>
				<td style="text-align:right;">1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
			</tr>
		</table>
		
		<button type="submit">確認進貨</button>
		<button type="reset">重新輸入</button>
	
	</div>

	<div class="footerPage"></div>	
	<script type="text/javascript">
		// $(".headerPage").load(".\\header.php",function(){
		// 	document.getElementById("title").innerHTML="出貨";
		// });
		$(".sidePage").load(".\\side.php");
		$(".footerPage").load(".\\footer.php");
		// document.getElementById("title").innerHTML="出貨";
		
	</script>
	<script>document.getElementById(totalPrice).textContent = 
		document.getElementsById(inPrice).value * document.getElementsById(amount).value;
	</script>
</body>

</html>