<?php


/**
 * makes a basic html page header
 * @param $css string link to css file.
 * @param $pageName string the name of your page
 * @return string formatted html header
 */
function startHTMML($css, $pageName){
    $html = <<< START
    <!DOCTYPE html>
<html lang="en">
<head>
  
    <link href="$css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>$pageName | SITE</title>
</head>
START;

    return $html;

}

/**
 * @param $nav array of nav bar items
 */
function makeNavBar ($nav){
    $navBar = <<< NAV
    <nav>
        <ul>
NAV;
    foreach ($nav as $link=>$text){
        $navBar .= "<li> <a href='$link'> $text </a></li>\n ";
    }
    $navBar .= <<< NAV2
        </ul>
    </nav>
NAV2;
    return $navBar;

}
