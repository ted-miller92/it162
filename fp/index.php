<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial scale=1">
		<title>Peloton Seattle</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/styles.css">

        <!--Google font 'Work Sans'-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

        <!--FOnt Awesome-->
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
            <!-- <div id="stripes">
            </div> -->
        </div>
        <div id="mobileMenu">
                <a class="menuItem" href="index.php">Home</a>
                <a class="menuItem" href="cafe.html">Cafe</a>
                <a class="menuItem" href=#>Shop</a>
                <a class="menuItem" href=#>Brands</a>
                <a class="menuItem" href=#>About</a>
                <a class="menuItem" href=#>Contact</a>
        </div>
        <!--Header-->
        <div id="header">
            <div class="logoWrapper">
                <a href="index.php">
                    <img alt="pelotonLogo" id="logo" src="images/misc/imageonline-co-invertedimage.png">
                </a>            
            </div>
        </div>
        
        <!--Main Content-->
        <h1>Seattle Cafe & Bike Shop</h1>
        <div id="mainContent">
        <article>
            
            
            <div class="panel sectionOne">
                <h2>Welcome</h2>
                <br>
                <p>Swing by for coffee or a quick tune. Enjoy breakfast while we provide the service you need, or have a beer and talk about the bike build of your dreams.</p>
                
            </div>
            <div class="panel sectionTwo">
                <h2>Bites</h2>
                <br>
                <p>Enjoy a delicious breakfast sandwich or the local favorite breakfast burrito. Our tiny kitchen provides an extensive menu, with great vegan options and a variety of styles. You'll be sure to find a new favorite whatever you order. </p>
            </div>
            <br>
            <div class="orderHere"><a href=#>Order here!</a></div>
            <br>
            <div class="panel sectionOne">
                <h2>Bikes</h2>
                <br>
                <p>The full-service shop at Peloton can help you with fixing a flat or with overhauling suspension parts. We can get any part you need or do a full bike build. Either drop by or <a class="contactUs" href=#>contact us here</a> to talk directly to the mechanics.</p>
            </div>
        </article>
        <!--Aside Content-->
        <aside>
            <div class="panel sectionTwo">
                <div class="address">
                    <h3>Where to Find Us</h3>
                    <p>1220 E Jefferson</p>
                    <p>Seattle, WA</p>  
                    <p>98102</p>
                    <p><a href="tel:123-456-7890">123-456-7890</a></p>
                </div>
                <br><br>
                <div class="hours">
                    <h3>Hours</h3>
                    <p>Tue - Sun</p>
                    <p>9AM - 2PM</p>
                </div>
                <br>
                <div class="iframeContainer">
                    <iframe class="iframeResponsive" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2690.0170576635423!2d-122.31793788426599!3d47.60635799598763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906ac645c0007f%3A0x40cd35e06f7d90ed!2sPeloton%20Cafe!5e0!3m2!1sen!2sus!4v1622864467619!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </aside>
        </div>
        <!--Footer-->
        <div id="stripes">
        </div>
        <footer>
            <p>
                &copy; <?=date('Y')?> All Rights Reserved Ted Miller ~ 
                <a href="https://validator.w3.org/nu/?doc=<?=$currentURL?>" target="_blank" title="Validate HTML">Check HTML</a> ~ 
                <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow" target="_blank" title="Validate CSS">Check CSS</a>
            </p>
        </footer>
        <script src="js/nav.js"></script>
        <script src="js/stripes.js"></script>"
    </body>
</html>