<?php
$token=$_GET['token'];
?>

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
                                </div>
                                <?php
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'sccpass') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
        You can change a password here        </div>';
    }
    if ($_GET['msg'] == 'endtime') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
        This link has expired         </div>';
    }

	if ($_GET['msg'] == 'exe') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
		Password does not match     </div>';
    }

    if ($_GET['msg'] == 'err3') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
        Something went wrong please try again </div>';
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
                                <?php
	// Check if the token exists in the database
if(!isset($_GET['token'])) {
    echo '
	<div class="alert alert-danger alert-dismissible " role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" >
	You are on the error page<br> <a href="'.$base_url.'backend/login"><button type="button" class="btn btn-info"> Home</button></a>      </div>';
    exit();
}
$token = mysqli_real_escape_string($db, $_GET['token']);
$query = "SELECT * FROM admin_users WHERE token='$token'";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) == 0) {
    echo '
	<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" >
	Invalid code <br> <a href="'.$base_url.'backend/login"><button type="button" class="btn btn-info"> Home</button></a>      </div>
	';
    exit();
}
$user = mysqli_fetch_array($result);
$expiry_time = $user['token_expiry'];
if(time() > $expiry_time) {
    echo '
	<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" >
	The code has expired <br> <a href="'.$base_url.'backend/login"><button type="button" class="btn btn-info"> Home </button></a>  </div>';
    exit();
}
	?>

	<input type="hidden" name="token" value="<?=$token?>">
                                <div class="mb-3">
                                        <label for="password" class="form-label">Enter the new password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="new_password" class="form-control" placeholder="Enter the new password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Re-enter the new password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" name="exnew_password" id="password" class="form-control" placeholder="Re-enter the new password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" name="restpassword" type="submit"> Reset your password </button>
                                    </div>

                                </form>

                                

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
