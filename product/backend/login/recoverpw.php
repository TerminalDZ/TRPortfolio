
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="<?=$base_url?>" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="<?=$base_img_seo?><?= $seodata['icon']; ?>" alt="" height="22">
                                            </span>
                                        </a>
                    
                                        <a href="<?=$base_url?>" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="<?=$base_img_seo?><?= $seodata['icon']; ?>" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                                </div>
                                <?php
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'sending') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
        Password reset link sent successfully     </div>';
    }
    if ($_GET['msg'] == 'noacount') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
        There is no account with this email!       </div>';
    }

	if ($_GET['msg'] == 'err1') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
        There was an error sending the password reset link     </div>';
    }

	if ($_GET['msg'] == 'err2') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
        Something went wrong please contact support  </div>';
    }
	

}
echo '<script>
    setTimeout(function() {
        document.getElementById("alert-box").style.animation = "fadeOut 0.5s";
        document.getElementById("alert-box").style.webkitAnimation = "fadeOut 0.5s";
        setTimeout(function() {
            document.getElementById("alert-box").style.display = "none";
        }, 500);
    }, 8000);
</script>';
?>
                                <form action="<?=$base_db;?>access.php" method="post">

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" name="resetpass" type="submit"> Reset Password </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Back to <a href="<?=$base_url?>backend/login/" class="text-white ms-1"><b>Log in</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        