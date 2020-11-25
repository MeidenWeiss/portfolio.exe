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
        <div id="card"> Samuel Palacios </div>
        <div id="nav_block">
            <div id="menu">
                <a href="index.php"><div class="nav_box">Home</div></a>
                <a href="index.php?page=css"><div class="nav_box">CSS</div></a>
                <a href="index.php?page=svg"><div class="nav_box">SVG</div></a>
                <a href="index.php?page=js"><div class="nav_box">JS</div></a>
            </div>
        </div>
        <div id="content_area">
            <?php
            switch($page){
                case 'css':
                    require_once('css_page.php');
                break;
                case 'svg':
                    require_once('svg_page.php');
                break;
                case 'js':
                    require_once('js_page.php');
                break;
                default: 
                    require_once('index.php');
                break;
                }
            ?>
        </div>
    </body>
</html>
