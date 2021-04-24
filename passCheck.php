<?php
	include(".\db_conn.php");
	$id = $_POST['id'];
    $pw = $_POST['pw'];
	// echo ("<br>input id=".$id."<br>input pw=".$pw);//確認id和pw有post過來這個php檔案
	// $hash = password_hash($pw, PASSWORD_DEFAULT);

	//判斷輸入的資料正確性
	if (!ctype_alnum($id)) { // 判斷是否為英文數字
		die('只能是英文數字<br>'. '<a href=".\index.php">回到上層重新登入</a>');
	} else if (empty($id) || empty($pw)) { //帳號密碼任何一個都不可為空
		die('請輸入正確帳號密碼<br>' . '<a href=".\index.php">回到上層重新登入</a>');
 	}

	// $sql = "SELECT pw FROM user WHERE id = :id";//查詢id的pw

	$sql = "SELECT * FROM user WHERE id = :id";//id全部資料

	$statement = $connection->prepare($sql); // 其實這段有撈到資料就等於確認到有帳號
	$statement->execute(array(
		'id' => $id
	));
	// $rows = $statement->fetchColumn(0);//抓到資料庫裡面的pw
	
	$rows=$statement->fetchALL(PDO::FETCH_ASSOC);
	// var_dump($rows);

	//echo "<br>".$rows[0]['id'];
	//echo "<br>".$rows[0]['access'];
	if($pw == $rows[0]['pw']){//先用簡單板之後記得加密解密
		echo "<br>確認帳號密碼正確，進入系統!";
		setcookie("id", $id, time()+3600);
		setcookie("access", $rows[0]['access'], time()+3600);
		header("Refresh: 0; url= .\main.php") ;//3秒後進入系統
    	exit();
	} else {
		die('密碼錯誤<br>'. '<a href=".\index.php">回到上層重新登入</a>');
	}
	
?>