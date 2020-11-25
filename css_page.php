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
                    Module 2
                    <a href="index.php?page=svg&task=lt2.2"><div class="box_drop1">Learning Task 2.2</div></a>
                    <a href="index.php?page=svg&task=lt2.3"><div class="box_drop2">Learning Task 2.3</div></a>
                </div>
                <div class="sub_box">
                    Module 3
                    <a href="index.php?page=svg&task=lt3.2"><div class="box_drop1">Learning Task 3.2</div></a>
                    <a href="index.php?page=svg&task=lt3.3"><div class="box_drop2">Learning Task 3.3</div></a>
                </div>
                <div class="sub_box">
                    Module 4
                    <a href="index.php?page=svg&task=lt4.1"><div class="box_drop1">Learning Task 4.1</div></a>
                    <a href="prelim.php"><div class="box_drop2">CLE1 (PRELIM)</div></a>
                </div>
            </div>
        </div>
        <div id="content_space">
        <?php
            switch($task){
                case 'lt2.2':
                    require_once('learningtask2_2.php');
                break;
                case 'lt2.3':
                    require_once('learningtask2_3.php');
                break;
                case 'lt3.2':
                    require_once('learningtask3_2.php');
                break;
                case 'lt3.3':
                    require_once('learningtask3_3.php');
                break;
                case 'lt4.1':
                    require_once('learningtask4_1.php');
                break;
                default: 
                    // Do nothing
                break;
                }
            ?>
        </div>
    </body>
</html>
