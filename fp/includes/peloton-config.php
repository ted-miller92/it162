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
        $title = "Cafe & Bike Shop";
        $pageID = 'Seattle Cafe & Bike Shop';
    break;

    case 'cafe.php':
        $title = "Cafe";
        $pageID = "Cafe";
        $logo_color = ' style="color:#C28C7B"';
    break;

    case 'shop.php':
        $title = "Shop";
        $pageID = "Shop";
        $logo_color = ' style="color:#C28C7B"';
    break;

    case 'brands.php':
        $title = "Brands";
        $pageID = "Brands We Work With";
        $logo_color = ' style="color:#C28C7B"';
    break;
    
    case 'about.php':
        $title = "About Us";
        $pageID = "About Us";
    break;
    
    case 'contact.php':
        $title = "Contact";
        $pageID = "Get in Touch";
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';
        $pageID = 'Welcome';

}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Peloton";
$nav1['cafe.php'] = "Cafe";
$nav1['shop.php'] = "Shop";
$nav1['brands.php'] = "Brands";
$nav1['about.php'] = "About";
$nav1['contact.php'] = "Contact";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//active page - add class reference
	    	$myReturn .= '<a class="menuItem" href="' . $url . '">' . $text . '</a>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<a class="menuItem" href="' . $url . '">' . $text . '</a>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

//Check HTML and CSS of Current page
$currentURL = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

//This will help avoid PHP date errors:

date_default_timezone_set('America/Los_angeles');
?>