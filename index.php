<!DOCTYPE html5>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title>簡易進出貨系統</title>
	</head>

	<body style="height:100%; width:100%; margin:0; background:black;">

	<style>/* 旋轉方塊的CSS */
	.box:before{
		content:'';
		position:absolute;
		z-index:2;/*box層*/
		top:60px;
		left:50px;
		width:50px;
		height:50px;
		background:yellow;
		border-radius:2px;
		transform: rotate(45deg);
		animation:rollbox .8s infinite ;
	}
	@keyframes rollbox{
		0%{
			top:50px;
			transform: rotate(90deg); /**/
		}
		20%{
			border-radius:2px;
		}
		50%{
			top:80px; 
			transform: rotate(45deg);
			border-bottom-right-radius:25px;
		}
		80%{
			border-radius:2px;
		}
		100%{
			top:50px;
			transform: rotate(0deg);
		}
	}
	.box:after{
		content:'';
		position:absolute;
		z-index:1;/*shadow層*/
		top:128px;
		left:52px;
		width:44px;
		height:3px;
		background:red;
		border-radius:100%;
		animation:shadow .8s infinite ; 
	}
	@keyframes shadow{
		0%,100%{
			left:54px;
			width:40px;
			background:gray;
		}
		50%{
			top:126px;
			left:50px;   /*讓陰影保持在原位*/
			width:50px;
			height:7px;
			background:blue;
		}
	}
	</style>

	<div class="box" style="position: absolute; left:50%; margin-left: -75px"></div><!-- 旋轉方塊的HTML -->

	<div style="position:relative; height:100%;width:100%;">
		<div style="position: absolute; top:50%; left:50%; transform: translate(-50%, -50%);"><!-- top上下置中 left左右置中 translate將定位點從框框左上移到框框中心 -->
			<form  border="10" action=".\passCheck.php" method="post"><!--導到密碼驗證網頁-->
				<div align="center" style="color:white;background:#000099;">進出貨系統</div>
				<div align="center" style="color:white;background:#009900;">請輸入帳號密碼</div>
				<div align="center" style="border:solid;">
					<label style="color:green;">帳號</label>
					<input name="id" type="text" required><br>
					<label style="color:red;">密碼</label>
					<input name="pw" type="password" required><br>
					<button type="submit">登入</button>
					<button type="reset">重新輸入</button>
				</div>
				<div align="center" style="background:#990000;color:white;">忘記密碼</div>
			</form>
		</div>
	</div>

		
	</body>
</html>
