<?php 
/*
portal-config.php 
Used to store all of our IT 162 configuration information
*/
//The following prevents data from being sent early
ob_start();

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//die;

//echo $_SERVER['PHP_SELF'];
//die;

//Create logo_color variable
$logo_color = '';

switch(THIS_PAGE){
    case 'index.php':
        $title = "Ted's Web Resources Page";
        $logo = 'fa-home';
        $pageID = 'Welcome';
    break;

    case 'contact.php':
        $title = "Contact Ted";
        $logo = 'fa-pencil-square-o';
        $pageID = 'Contact Ted';
        $logo_color = ' style="color:#C28C7B"';
    break;

    case 'calendar.php':
        $title = "Calendar";
        $logo = 'fa-universal-access';
        $pageID = 'Calendar';
        $logo_color = ' style="color:#C28C7B"';
    break;

    case 'flexbox.php':
        $title = "Flexbox";
        $logo = 'fas fa-angle-double-right';
        $pageID = 'Flexbox';
        $logo_color = ' style="color:#C28C7B"';
    break;
    
    case 'lightbox.php':
        $title = "Lightbox";
        $logo = 'fas fa-angle-double-right';
        $pageID = 'Lightbox';
        $logo_color = ' style="color:#C28C7B"';
    break;

    case 'galleries.php':
        $title = "Galleries";
        $logo = 'fas fa-angle-double-right';
        $pageID = 'Galleries';
        $logo_color = ' style="color:#C28C7B"';
    break;

    case 'map.php':
        $title = "Map";
        $logo = 'fas fa-angle-double-right';
        $pageID = 'Map';
        $logo_color = ' style="color:#C28C7B"';
    break;

    case 'responsiveWeb.php':
        $title = "Responsive Web Design";
        $logo = 'fas fa-angle-double-right';
        $pageID = 'Responsive Web Design';
        $logo_color = ' style="color:#C28C7B"';
    break;

    case 'shoppingCarts.php':
        $title = "Shopping Carts";
        $logo = 'fas fa-angle-double-right';
        $pageID = 'Shopping Carts';
        $logo_color = ' style="color:#C28C7B"';
    break;

    case 'webcams.php':
        $title = "Live Streams";
        $logo = 'fas fa-angle-double-right';
        $pageID = 'Live Streams';
        $logo_color = ' style="color:#C28C7B"';
    break;

    case 'contact.php':
        $title = "Contact Ted";
        $logo = 'fas fa-angle-double-right';
        $pageID = 'Contact Ted';
        $logo_color = ' style="color:#C28C7B"';
    break;

    case 'youtube.php':
        $title = "Accessibility";
        $logo = 'fas fa-angle-double-right';
        $pageID = 'Web Accessibility Resources';
        $logo_color = ' style="color:#C28C7B"';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';
        $pageID = 'Welcome';

}

//Check HTML and CSS of Current page
$currentURL = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

//This will help avoid PHP date errors:

date_default_timezone_set('America/Los_angeles');
?>