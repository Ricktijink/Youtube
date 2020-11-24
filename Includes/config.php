<?php
// Turn on output buffering
ob_start(); 

// Set default timezone
date_default_timezone_set("Europe/Amsterdam");

try{
    $con = new PDO("mysql:dbname=Youtube;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
