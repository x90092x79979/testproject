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
	<div class="headerPage"></div> 
	<div class="main" style="width:100%; display:flex; flex-direction:row;">
		<div class="sidePage"></div>
		<table border="1" width="100%">
				
			<tr>
				<th>單號</th>
				<th>貨名</th>
				<th>單價</th>
				<th>數量</th>
				<th>總金額</th>
			</tr>
			<tr>
				<td>a</td>
				<td>b</td>
				<td>c</td>
				<td>d</td>
				<td>e</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
		</table>
	
	</div>

	<div class="footerPage"></div>	
	<script type="text/javascript">
		$(".headerPage").load(".\\header.php");
		$(".sidePage").load(".\\side.php");
		$(".footerPage").load(".\\footer.php");
	</script>

</body>

</html>