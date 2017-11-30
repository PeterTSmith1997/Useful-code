<?php

/**
 *
 */
function startHTMML(){
    $html = <<< START
    <!DOCTYPE html>
<html lang="en">
<head>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-55673568-6', 'auto');
        ga('send', 'pageview');

    </script>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Home | Peters web</title>
</head>
START;

    return $html;

}