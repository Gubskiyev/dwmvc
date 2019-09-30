<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">-->
        <!--<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/dw.css" rel="stylesheet">-->
        <link href="/css/main.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    </head>
    <body>
        <?php include_once 'app/views/viewHeader.php'; ?>
        <!--<div class="container">
            <div class="row">-->
                <!--<?php include_once 'app/views/'.$content;?>-->
                <?php include $content;?>
            <!--</div>
        </div>-->
            <?php include_once 'app/views/viewFooter.php'?>
    </body>
</html>