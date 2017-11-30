<?php

/**
 *
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