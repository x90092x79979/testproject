<?php
    #連接資料庫
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpasswd = 'test';
    $dbname = 'testerp';
    $dsn = "mysql:host=".$dbhost.";dbname=".$dbname;
 
    try{
        //注意，使用PDO方式連結，需要指定一個資料庫，否則將拋出異常
        $connection = new PDO($dsn,$dbuser,$dbpasswd);
        $connection->exec("SET CHARACTER SET utf8");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected Successfully";
    }catch(PDOException $e){
        echo "Connection failed: ".$e->getMessage();
    }

	// $connection = new PDO('mysql:host=localhost;dbname=testerp;charset=utf8', 'root', 'test');
	// if ($connection) {
    //     echo "連線成功--";
    // } else {
    //     die("連線失敗：" . mysqli_connect_error());
    // }

    // $server = "localhost";         # MySQL/MariaDB 伺服器
    // $dbuser = "officeguide";       # 使用者帳號
    // $dbpassword = "your_password"; # 使用者密碼
    // $dbname = "officeguide_db";    # 資料庫名稱
    
    // # 連接 MySQL/MariaDB 資料庫
    // $connection = new mysqli($server, $dbuser, $dbpassword, $dbname);
    
    // # 檢查連線是否成功
    // if ($connection->connect_error) {
    //   die("連線失敗：" . $connection->connect_error);
    // }

?>