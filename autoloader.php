<?php

spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    $path = "src/";
    $ext = ".php";
    $full = $path . $className . $ext;

    if (!file_exists($full)) {
        return false;
    }

    include_once $full;
}
