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
        $title = "Ted's IT162 Portal Page";
        $logo = 'fa-home';
        $pageID = 'Welcome';
    break;

    case 'contactme.php':
        $title = "Contact Ted";
        $logo = 'fa-pencil-square-o';
        $pageID = 'Contact Ted';
        $logo_color = ' style="color:#C28C7B"';
    break;

    case 'aia.php':
        $title = "AIA";
        $logo = 'fa-universal-access';
        $pageID = 'AIA';
        $logo_color = ' style="color:#C28C7B"';
    break;

    case 'flowchart.php':
        $title = "Flowchart";
        $logo = 'fas fa-angle-double-right';
        $pageID = 'flowchart';
        $logo_color = ' style="color:#C28C7B"';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';
        $pageID = 'Welcome';

}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Home";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Ted";

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
	    	$myReturn .= '<a class="active" href="' . $url . '">' . $text . '</a>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<a href="' . $url . '">' . $text . '</a>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

//Check HTML and CSS of Current page
$currentURL = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

//This will help avoid PHP date errors:

date_default_timezone_set('America/Los_angeles');
?>