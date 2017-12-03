<?php

/**
 * Created by PhpStorm.
 * User: Student
 * Date: 03/12/2017
 * Time: 21:52
 */
class core
{
    var $siteName;
    var $pageName;
    var $css;

    function _constuct($siteName, $pageName, $css){
        $this->pageName = $pageName;
        $this->siteName = $siteName;
        $this->css = $css;
        $this->html($pageName, $css, $siteName);
    }

    function html($pageName, $css, $sitename)
    {
        $html = <<< START
    <!DOCTYPE html>
<html lang="en">
<head>
  
    <link href="$css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>$pageName | $sitename</title>
</head>
START;
        return $html;
    }


    function makeNavBar($nav)
    {
        $navBar = <<< NAV
    <nav>
        <ul>
NAV;
        foreach ($nav as $link => $text) {
            $navBar .= "<li> <a href='$link'> $text </a></li>\n ";
        }
        $navBar .= <<< NAV2
        </ul>
    </nav>
NAV2;
        return $navBar;

    }

    /**
     * @return mixed
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * @param mixed $siteName
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
    }
}