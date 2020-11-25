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
                    Module 7
                    <a href="index.php?page=js&task=lt7.1"><div class="box_drop1">Learning Task 7.1</div></a>
                </div>
            </div>
        </div>
        <div id="content_space">
        <?php
            switch($task){
                case 'lt7.1':
                    require_once('learningtask7_1.html');
                break;
                default: 
                    // Do nothing
                break;
                }
            ?>
        </div>
    </body>
</html>