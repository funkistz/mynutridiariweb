<?php
$path = Yii::app()->theme->baseUrl;
?>
<!doctype html>
<html>
    <head>
        <title>MYNUTRIAPPS II : MYNUTRIDIARI</title>
        <link href="<?= $path ?>/css/layout.css" type="text/css" rel="stylesheet">
        <link href="<?= $path ?>/../common/twitter3/css/bootstrap.css" type="text/css" rel="stylesheet">
        <script src="<?=$path?>/../common/jquery-ui/js/jquery-1.9.1.js"></script>
    </head>
    <body>
        <div id="xwrapper">
            <div id="xheader-wrapper">
                <div id="xheader"></div>
            </div>

            <div id="xmenu">
                <?php include 'menu.php' ?>
            </div>
            
            <div id="xcontent-wrapper">
                <div id="xcontent"><?php echo $content ?></div>
            </div>
            <div style="clear: both"></div>
            <div id="xfooter"></div>
        </div>
    </body>
</html>