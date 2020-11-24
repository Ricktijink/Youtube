<?php

spl_autoload_register('myAutoLoader');

function myAutoloader($className){
    $path = "Classes/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;
    
    // Provide error if class does not exist or can't be found
    if(!file_exists($fullPath)){
        return false;
    }

    include_once $fullPath;
}