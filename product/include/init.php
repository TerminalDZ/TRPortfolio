<?php

session_start();

// Errors Reporting:
$ShowErrors = 'development'; 

if ($ShowErrors == 'development') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} elseif ($ShowErrors == 'production') {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
} else {
    die('Error Reporting is not defined');
}

// Common Files:
require 'config.php';
require 'connect.php';
require 'addition-url.php';
require 'dbview.php';
require 'phpmail.php';
require 'checkupload.php';




if (!defined("BASEURL")) {
    die("BASEURL is not defined");
}

