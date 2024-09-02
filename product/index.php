<?php 
//if os dir install 
if (file_exists('install')) {
    header('Location: install/index.php');
    exit;
}

require 'include/init.php';
require 'include/visitor_log.php';
include 'frontend/theme/'.$seodata['theme'].'/index.php'
?>
