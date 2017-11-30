<?php


/**
 * makes a basic html page header
 * @param $css link to css file.
 * @param $pageName the name of your page
 * @return string formatted html header
 */
function startHTMML($css, $pageName){
    $html = <<< START
    <!DOCTYPE html>
<html lang="en">
<head>
  
    <link href="$css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>$$pageName | SITE</title>
</head>
START;

    return $html;

}

/**
 * @param $nav
 */
function navBar ($nav){

}