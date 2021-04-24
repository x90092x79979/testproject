<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href=".\fontawesome\css\fontawesome.min.css"> -->
	<script src="https://kit.fontawesome.com/f21df058bc.js" crossorigin="anonymous"></script>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;200;300;400;500;600;800;900&display=swap);
		*{
			margin: 0;
			padding: 0;
			list-style: none;
			font-family: 'Noto Sans TC', sans-serif;
		}
		html,body{
			height: 100%;
		}
		body{
			background-color: #546377;
		}
		.side-menu{
			width: 200px;
			height: 100%;
			padding: 50px 0;
			box-sizing: border-box;
			background-image: linear-gradient(0deg,#3381b0,#c2196c);
			display: flex;
			flex-direction: column;
			box-shadow: 5px 0px 10px hsla(240, 40%, 15%, 0.6);/* hsla 色相,飽和度,亮度,透明度 */
		}
		.side-menu form{
			display: flex;
			margin: 0 10px 50px;
			border-radius: 100px;
			border:1px solid rgb(255,255,255,0.4);
		}
		.side-menu form input,
		.side-menu form button{
			border:none;
			background-color: transparent;
			color: #fff;
			padding: 5px 10px;
		}
		.side-menu form input{/*側欄搜尋欄位的寬度*/
			width: 130px;
		}
		.side-menu form button{/*按鈕的寬度*/
			width: 50px;
		}
		.side-menu form input:focus,
		.side-menu form button:focus{
			outline: none;
		}
		a{
			text-align:center;
		}
		nav a{
			display: block;
			padding: 10px;
			color: #fff;
			text-decoration: none;
			position: relative;
		}
		nav a + a::before{/*before要搭配content使用。(沒有content before就不會存在)*/
			content: '';
			position: absolute;
			/*border-top: 1px solid rgb(255,255,255,0.4);*/
			left: 10px;
			right: 10px;
			top: 0;
		}
		nav a .fa{
			margin-right: -1.1em;
			transform: scale(0);
			transition: 0.3s;
		}
		nav a:hover .fa{
			margin-right: 0em;
			transform: scale(1);
		}
		nav a:hover{
			background-color:royalblue;
		}
	</style>
</head>
<body>
	<div class="main">
		<div class="side-menu">
			<form>
				<input type="search" placeholder="請輸入關鍵字">
				<button><i class="fa fa-search"></i></button>
			</form>
			<nav>
				<a href="inProduct.php" class="inProduct">
					<i class="fa fa-user" aria-hidden="true"></i> 
					進貨
				</a>
				<a href="outProduct.php" class="outProduct">
					<i class="fa fa-gavel" aria-hidden="true"></i>
					出貨
				</a>
				<a href="showProduct.php" class="showProduct">
					<i class="fa fa-object-group" aria-hidden="true"></i> 
					明細
				</a>
				<a href="editProduct.php" class="editProduct">
					<i class="fa fa-globe" aria-hidden="true"></i> 
					品項
				</a>
				<a href="editUser.php" class="editUser">
					<i class="fa fa-cutlery" aria-hidden="true"></i> 
					權限
				</a>
			</nav>
		</div>
	</div>
</body>
<script>
	function parseCookie() {
		var cookieObj = {};//所有cookie字串
		var cookieAry = document.cookie.split(';');//依照;切字串，分隔不同的cookie
		var cookie;
		
		for (var i=0, l=cookieAry.length; i<l; ++i) {
			cookie = jQuery.trim(cookieAry[i]);
			cookie = cookie.split('=');
			cookieObj[cookie[0]] = cookie[1];
		}	
		return cookieObj;
	}

	function getCookieByName(name) {
		var value = parseCookie()[name];
		if (value) {
			value = decodeURIComponent(value);
		}
		return value;
	}

	// document.write(document.cookie);
	
	$(document).ready(function(){
		switch(getCookieByName('access')){
			case 'low':
				$(".editProduct").hide();
				$(".editUser").hide();
				break;
			case 'mid':
				$(".editUser").hide();
				break;
			case 'high':
				break;
			default:
				printf("出現未知錯誤");
				break; 
		}
	});
</script>
</html>