<?php 
if (is_dir('../install')) {
    header('Location: ../install/');
    exit;
};
require '../include/init.php';

if (!isset($_SESSION['username'])) {
    header('location:'.BASEURL.'backend/login/');
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>

<?php
include 'basic/head.php';
?>



    </head>

    <!-- body start -->
    <body data-layout-mode="two-column" data-theme="light" data-layout-width="fluid" data-topbar-color="light" data-leftbar-color="light" data-sidebar-user="false" data-leftbar-size="condensed">
        <!-- Begin page -->
        <div id="wrapper">

            <!--top bar -->
           <?php include 'basic/topbar.php'; ?>
                <!-- end top bar -->

        <!--left bar -->
        <?php include 'basic/leftbar.php'; ?>
                <!-- end left bar -->


            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                   
                        <?php
                            if (isset($_GET['settings'])) {
                                include('pages/settings.php');
                            }elseif (isset($_GET['myacount'])) {
                                include('pages/myacount.php');
                            }elseif (isset($_GET['editusers'])) {
                                include('pages/users.php');
                            }elseif (isset($_GET['editsmtp'])) {
                                include('pages/smtp.php');
                            }elseif (isset($_GET['editseo'])) {
                                include('pages/seo.php');
                            }elseif (isset($_GET['contact'])) {
                                include('pages/contact.php');
                            }elseif (isset($_GET['services'])) {
                                include('pages/services.php');
                            }elseif (isset($_GET['portfolio'])) {
                                include('pages/portfolio.php');
                            }elseif (isset($_GET['resume'])) {
                                include('pages/resume.php');
                            }elseif (isset($_GET['about'])) {
                                include('pages/about.php');
                            }elseif (isset($_GET['share'])) {
                                include('pages/social_media.php');
                            }elseif (isset($_GET['theme'])) {
                                include('pages/theme.php');
                            }else {
                                include('pages/dashboard.php');
                            };
                        ?>

                        
                    </div>

                </div> 

             

            </div>

            

        </div>
        <!-- END wrapper -->


      

       
        <?php include 'basic/script.php'; ?>
    </body>
</html>