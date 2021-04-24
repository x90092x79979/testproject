<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f21df058bc.js" crossorigin="anonymous"></script>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;200;300;400;500;600;800;900&display=swap);
        *{
            margin: 0;
            padding: 0;
            list-style: none;
            font-family: 'Noto Sans TC', sans-serif;
        }
        .main-header{
            width: 100%;
            background: linear-gradient(0deg,#fe70d8,#3713c1);
        }
        .container{
            margin: auto;
            max-width: 1200px;
            display: flex;
            padding: 10px 20px;
            align-items: center;
        }
        .logo{
            width: 50px;
        }
        .logo img{
            width: 100%;
            vertical-align: middle;
        }
        .header-search{
            display: flex;
        }
        .header-search input,
        .header-search button{
            border:none;
            padding: 6px 1em;
            background-color: #fff;
        }
        .header-search input:focus,
        .header-search button:focus{
            outline: none;
        }
        .header-search input[type="search"]{
            border-radius: 200px 0 0 200px;
        }
        .header-search button{
            border-radius: 0 200px 200px 0;
        }
        #title{
            margin: auto;
            display: flex;
            font-size:36px;
            color: #FFF;
        }
        .main-nav{
            margin: auto;
            display: flex;
        }
        .main-nav a{            
            color: #fff;
            text-decoration: none;
            padding: 0 1em;            
            transform: translateY(0px);
            transition: 0.3s;
            position: relative;
        }
        .main-nav a:hover{
            transform: translateY(-5px);
        }
        .main-nav a:after{
            content: '';
            height: 0;
            position: absolute;
            left: 50%;
            right: 50%;
            bottom: -10px;            
            border-bottom: 1px solid #fff;
            transition: 0.3s;
        }
        .main-nav a:hover:after{            
            right: 0%;
            left: 0%;
        }        
    </style>
</head>
<body>
    <header class="main-header">
        <div class="container">
            <a href="#" class="logo">
                <img src="Farrulsfur.png" alt="貓衣">
            </a>
            <div id="title"><script>getCookieByName('id');</script>
                <?php 
                    if(isset($title)){
                        echo "$title-".$_COOKIE["id"];;
                    }else{
                        echo "進出貨系統-".$_COOKIE["id"];; 
                    }
                ?>
            </div>
            <nav class="main-nav">
                <a href="#">易懂</a>
                <a href="#">入門</a>
                <a href="#">中階</a>
                <a href="#"><?php echo "老鳥"?></a>
            </nav>
            <form class="header-search">
                <input type="search" name="" id="">
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
    </header>
</body>
</html>