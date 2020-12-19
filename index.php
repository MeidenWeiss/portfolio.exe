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
                <a href="index.php?page=home"><div class="nav_box">Home</div></a>
                <a href="index.php?page=css"><div class="nav_box">CSS</div></a>
                <a href="index.php?page=svg"><div class="nav_box">SVG</div></a>
                <a href="index.php?page=js"><div class="nav_box">Canvas</div></a>
            </div>
        </div>
        <div id="content_area">
            <?php
            switch($page){
                case 'home':
                    require_once('homepage.php');
                break;
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
                    require_once('homepage.php');
                break;
                }
            ?>
        </div>
        <div id="about">
            <h2 id="about_title">About the Author</h2>
            <p id="sub_text">
                My name is Samuel Palacios and I'm an IT college student currently on my 3rd third.
                I can do Webpage design both frontend and backend. I'm more into lineart and SVG 
                (Scalable Vector Graphics) grpahics creation and designing. The programs I use are 
                Visual Studio Code, XAMPP, Photoshop and Inkscape. Currently I don't handle nor
                accept any commissions as of yet.
            </p>
        </div>
    </body>
</html>
