<?php include 'includes/big-config.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/styles.css">

        <!--Google Font "Roboto"-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        
        <!--FontAwesome icons-->
        <script src="https://use.fontawesome.com/e90390b66f.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--For css menumaker script-->
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="js/cssMenu.js"></script>
    </head>
    <body>
        <div class="mainWrapper">
        <div class="header">
            <div class="heading">
                <h1>BIG Project</h1>
            </div>
        </div>

        <!--Start Nav bar-->
        <div id="cssmenu">
            <ul>
               <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> IT162</span></a></li>
               <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
               <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
               <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
               <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
                  <ul>
                     <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
                     <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
                     <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
                  </ul>
               </li>
               <li><a href="shoppingCarts.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>
               <li><a href="responsiveWeb.php"><span><i class="fa fa-fw fa-html5"></i> Responsive Web</span></a></li>
               <li><a href="webcams.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
               <li><a href="contact.php"><span><i class="fa fa-fw fa-letter"></i> Contact</span></a></li>
            </ul>
          </div>
          <h2><?=$pageID?></h2>