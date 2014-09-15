<?php
    // To display logged header
    if($_GET['logged']==1) $logged=true;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php /* page description */ ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/app.css">
        <?php
            for($i=0;$i<sizeof($scriptsHeader);$i++)
            {
                echo '<script src="'.$scriptsHeader[$i].'"></script>';
            }
        ?>
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicons/144x144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicons/114x114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicons/72x72.png">
        <link rel="apple-touch-icon-precomposed" href="images/favicons/57x57.png">
    
        <meta property="og:title" content="<?php echo $title; ?>" />
        <meta property="og:description" content="<?php /* page description */ ?>" />
        <meta property="og:image" content="" />
    </head>
    <body>