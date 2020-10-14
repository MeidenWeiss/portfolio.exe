<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio.exe</title>
        <link rel= "stylesheet" type= "text/css" href= "css/index.css"/>
    </head>
    <body>
        <div id="card"> Portfolio.exe </div>
        <div id="nav_block">
            <div id="menu">
                <a href="index.php"><div class="nav_box">Home</div></a>
                <a href="index.php?page=archive"><div class="nav_box">Archive</div></a>
                <a href="index.php?page=current"><div class="nav_box">2020 - 2021</div></a>
            </div>
        </div>
        <div id="content_area">
            <?php
            switch($page){
                case 'archive':
                    require_once('archive.php');
                break;
                case 'current':
                    require_once('current.php');
                break;
                default: 
                    require_once('index.php');
                break;
                }
            ?>
        </div>
    </body>
</html>
