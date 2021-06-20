<?php include "includes/peloton-config.php"; ?>
<!--Begin header.php-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial scale=1">
		<title>Peloton - <?=$title?></title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/styles.css">

        <!--Google font 'Work Sans'-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

        <!--Font Awesome-->
        <script src="https://use.fontawesome.com/e90390b66f.js"></script>

        <!--SuperSimple Slider-->    
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="js/sss.js"></script>
        <link rel="stylesheet" href="css/sss.css" type="text/css" media="all">
    </head>
    <body>
        <!--Navigation-->
        <div id="menuButton">
            <i class="fa fa-fw fa-bars"></i>
        </div>
        <!--<div id="mobileMenu">
            <a class="menuItem" href=#>Home</a>
            <a class="menuItem" href=#>Cafe</a>
            <a class="menuItem" href=#>Shop</a>
            <a class="menuItem" href=#>Brands</a>
            <a class="menuItem" href=#>About</a>
            <a class="menuItem" href=#>Contact</a>
        </div>-->
        <div id="mobileMenu">
            <?=makeLinks($nav1)?>
        </div>
        <!--Banner-->
        <div id="header">
            <div class="logoWrapper">
                <a href="index.php">
                    <img alt="logo" id="logo" src="images/misc/imageonline-co-invertedimage.png">
                </a>            
            </div>
        </div>
        <h1><?=$pageID?></h1>
        <!--End header.php-->
