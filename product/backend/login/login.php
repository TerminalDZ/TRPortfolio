
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
                                    
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                                </div>
                                <?php
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'logout') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
        Logout successful!        </div>';
    }
    if ($_GET['msg'] == 'iuser') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
        Incorrect email/password!        </div>';
    }

	if ($_GET['msg'] == 'banned') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
        Your account is banned, you must contact support      </div>';
    }

	if ($_GET['msg'] == 'sccpass') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
        Password has been changed You can register now   </div>';
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

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="remember" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" name="login" type="submit"> Log In </button>
                                    </div>

                                </form>

                                <div class="text-center">
                                   <!--rc-->
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="?recopw=true" class="text-white ms-1">Forgot your password?</a></p>
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

