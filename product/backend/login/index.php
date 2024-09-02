<?php 
require '../../include/init.php';


if (!isset($_SESSION['username'])) {

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include 'basic/head.php';?> 

    </head>

    <body class="authentication-bg authentication-bg-pattern">

    <?php
if (isset($_GET['recopw'])) {
    include('recoverpw.php');
}
elseif (isset($_GET['paspw'])) {
    include('paswpw.php');
}
else {
    include('login.php');
}
?>


    <?php include 'basic/script.php';?> 

        
    </body>
</html>

<?php }else{
	header('location:'.BASEURL.'/backend');
} ?>