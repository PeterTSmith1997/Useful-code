<?php
/**
 * @author Petersweb
 * @version 0.0.1 (03/11/17)
 * @usage Use to aid wth a basic html site
 */

/**
 * makes a basic html page header
 * @param $css string link to css file.
 * @param $pageName string the name of your page
 * @return string formatted html header
 */
function startHTML($css, $pageName){
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
 * @param $nav
 * @return string
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

/**
 * @param $options
 * @param  $selected
 */
function dropDownBox ($options, $selected = null){
    $dropDown = "<select>";
    foreach ($options as $value=>$text) {
        if ($value == $selected) {
            $dropDown .= "<option selected value ='$value'> $text</option>\n";
        }
        else{
            $dropDown .= "\t \t<option value ='$value'> $text</option>\n";
        }
    }
    $dropDown .= "</select>";

    return $dropDown;
}

function makeCheackbox(){

}