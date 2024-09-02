

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Modify profile
            </h4>
        </div>

    </div>
</div>

<?php
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'update') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        Your information has been updated       </div>';
    }
    if ($_GET['msg'] == 'errpassword') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        Incorrect password!        </div>';
    }

	if ($_GET['msg'] == 'passwordnomath') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        Password does not match     </div>';
    }

	if ($_GET['msg'] == 'error') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        Something went wrong please try again later  </div>';
    }
	

}
echo '<script>
    setTimeout(function() {
        document.getElementById("alert-box").style.animation = "fadeOut 0.5s";
        document.getElementById("alert-box").style.webkitAnimation = "fadeOut 0.5s";
        setTimeout(function() {
            document.getElementById("alert-box").style.display = "none";
        }, 500);
    }, 5000);
</script>';
?>

<form method="post" action="<?=$base_db;?>uprofile.php" >
    <div class="card">
        <div class="card-body container">

            <div class="row">
                <div class="col-md-6 mt-2 mb-2 ">
                <input type="hidden" name="id" value="<?= $id ?>">

                    <label class="mb-1">Full Name</label>
                    <input type="text" name="username"  value="<?= $username?>" class="form-control"
                        required>

                </div>
                <div class="col-md-6 mt-2 mb-2 ">
                    <label class="mb-1"> Email</label>
                    <input type="email"  name="email" value="<?= $email?>" placeholder="enter email"  class="form-control"
                        required>
                </div>
                <div class="col-md-12 mt-2 mb-2 ">
                    <label class="mb-1"> Existing password</label>
                    <input type="password"  name="ex_pass"   class="form-control" required>
                </div>
                <div class="col-md-6 mt-2 mb-2 ">
                    <label class="mb-1"> New password</label>
                    <input type="password"  name="password"   class="form-control">
                </div>
                <div class="col-md-6 mt-2 mb-2 ">
                    <label class="mb-1">Retype password</label>
                    <input type="password"  name="repassword"   class="form-control">
                </div>

         </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="text-sm-end">
                        <button type="submit" name="uprofile"
                            class="btn btn-success waves-effect waves-light mt-2 me-1">
                            <i class="mdi mdi-content-save"></i> Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
</form>

</div>
</div>