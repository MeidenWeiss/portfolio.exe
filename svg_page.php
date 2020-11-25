<?php
$task = (isset($_GET['task']) && $_GET['task'] != '') ? $_GET['task'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/page_styles.css">
    </head>
    <body>
        <div id="sub_block">
            <div id="sub_menu">
                <div class="sub_box">
                    Module 5
                    <a href="index.php?page=svg&task=lt5.1"><div class="box_drop1">Learning Task 5.1</div></a>
                </div>
                <div class="sub_box">
                    Module 6
                    <a href="index.php?page=svg&task=lt6.1"><div class="box_drop1">Learning Task 6.1</div></a>
                    <a href="index.php?page=svg&task=lt6.2"><div class="box_drop2">Learning Task 6.2</div></a>
                    <a href="midterm.html"><div class="box_drop3">CLE1 (MIDTERM)</div></a>
                </div>
            </div>
        </div>
        <div id="content_space">
        <?php
            switch($task){
                case 'lt5.1':
                    require_once('learningtask5_1.html');
                break;
                case 'lt6.1':
                    require_once('learningtask6_1.html');
                break;
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