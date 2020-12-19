<?php
$task = (isset($_GET['task']) && $_GET['task'] != '') ? $_GET['task'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/page_styles.css">
    </head>
    <body>
        <h1 id="text_css">SVG</h1>
        <div id="svg_oregairu">
            <object type="image/svg+xml" data="svg/oregairu.svg"></object>
        </div>
        <div id="svg_menacing1">
            <object type="image/svg+xml" data="svg/menacing.svg"></object>
        </div>
        <div id="svg_menacing2">
            <object type="image/svg+xml" data="svg/menacing.svg"></object>
        </div>
        <div id="sub_block">
            <div id="sub_menu">
                <div class="sub_box">
                    Module 5
                    <a href="learningtask5_1.html" target="_blank"><div class="box_drop1">Learning Task 5.1</div></a>
                </div>
                <div class="sub_box">
                    Module 6
                    <a href="learningtask6_1.html" target="_blank"><div class="box_drop1">Learning Task 6.1</div></a>
                    <a href="learningtask6_2.html" target="_blank"><div class="box_drop2">Learning Task 6.2</div></a>
                    <a href="midterm.html" target="_blank"><div class="box_drop3">CLE1 (MIDTERM)</div></a>
                </div>
            </div>
        </div>
        <div id="content_space">
        <?php
            switch($task){
                case 'lt6.2':
                    require_once('learningtask6_2.html');
                break;
                default: 
                    // Do nothing
                break;
                }
            ?>
        </div>
    </body>
</html>