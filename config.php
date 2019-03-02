<?php
//config.php

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Jerrel";

//echo THIS_PAGE;

//die;

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

$title = THIS_PAGE;
$logo_color = ''; //make logo_color an empty string by default
   
    //defaults for all pages    
    
    //default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default
        
    //no index while building a client site in our space
    $robots = "noindex,nofollow";
        
    $meta_description = "Seattle based web developer seeking employment. Focus on JavaScript, CSS & HTML.";

    $meta_keywords = "Jerrel Singleton, Jerrel Singleton Seattle, Jerrel Singleton Seattle WA, Jerrel Singleton Web Development, Jerrel Singleton Web Developer, Jerrel Gayle, Jerrel Gayle Web Development, Jerrel Gayle Web Developer, Jerrel Gayle Seattle, Jerrel Gayle Seattle WA";

switch(THIS_PAGE){
    
    case 'index.php':
        $title = 'Jerrel Singleton SCC WEB120 Portal';
        $logo = "fa-home";
    break;
        
    case 'contactme.php':
        $title = 'Jerrel Singleton Contact Me';
        $robots = "noindex,follow";
        $logo = "fa-paper-plane-o";
        $meta_description = "Please contact Jerrel, I'm a ". $meta_description;
        $meta_keywords = "Contact Jerrel Singleton, Jerrel Singleton Seattle, Jerrel Singleton Seattle WA, Jerrel Singleton Web Development, Jerrel Singleton Web Developer, Contact Jerrel Gayle, Jerrel Gayle Web Development, Jerrel Gayle Web Developer, Jerrel Gayle Seattle, Jerrel Gayle Seattle WA";
    break;


}

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LfJVosUAAAAAA1VWBlZ3Li5Z3yPNT8Zf3ytAfwp";
$secretKey = "6LfJVosUAAAAAIs8NVsa5yQ3g378uuk2vm6bBMXJ";

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
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>