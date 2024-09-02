


<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Users Management </h4>
        </div>
        
<?php
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'secsadd') {
        echo '<div class="alert alert-success alert-dismissible fade show" id="alert-box" role="alert" style="margin-top: 10px;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        User added!</div>';
    }
    if ($_GET['msg'] == 'editusr') {
        echo '<div class="alert alert-success alert-dismissible fade show" id="alert-box" role="alert" style="margin-top: 10px;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        User updated successfully</div>';
    }
    if ($_GET['msg'] == 'send') {
        echo '<div class="alert alert-success alert-dismissible fade show" id="alert-box" role="alert" style="margin-top: 10px;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        Registration data has been sent to a user successfully</div>';
    }
    if ($_GET['msg'] == 'errpass') {
        echo '<div class="alert alert-danger alert-dismissible fade show" id="alert-box" role="alert" style="margin-top: 10px;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        The password is wrong</div>';
    }
    if ($_GET['msg'] == 'errsend') {
        echo '<div class="alert alert-danger alert-dismissible fade show" id="alert-box" role="alert" style="margin-top: 10px;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        There was an error sending an email to the user</div>';
    }
    if ($_GET['msg'] == 'emailexist') {
        echo '<div class="alert alert-danger alert-dismissible fade show" id="alert-box" role="alert" style="margin-top: 10px;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        This is an already registered email</div>';
    }

	if ($_GET['msg'] == 'passwordnomach') {
        echo '<div class="alert alert-danger alert-dismissible fade show" id="alert-box" role="alert" style="margin-top: 10px;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        Password does not match, please try again</div>';
    }
    if ($_GET['msg'] == 'delet') {
        echo '<div class="alert alert-success alert-dismissible fade show" id="alert-box" role="alert" style="margin-top: 10px;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        User deleted successfully </div>';
    }

	if ($_GET['msg'] == 'error') {
        echo '<div class="alert alert-danger alert-dismissible fade show" id="alert-box" role="alert" style="margin-top: 10px;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        Something went wrong please try again later </div>';
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
        <div class="row">
            <div class="col-md-12">
                <div class="text-sm-end">
                    <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal"
                        data-bs-target="#adduser"><i class="mdi mdi-plus-circle me-1"></i>Add a user</button>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-12">
        <div class="card">
            <div class="row" style="margin: 40px;">
                <div class="col-sm-12">
                    <table id="alternative-page-datatable" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed" style="width: 252px;">

                        <thead>
                            <tr>
                            <th>Username</th>
                                 <th>Email</th>
                                 <th>Status</th>
                              
                                 <th>On Add</th>
                         
                                <th>Action</th>
                                <th>Send</th>



                            </tr>
                        </thead>

                        <tbody>
                            <?php
$queryusersadmin = "SELECT * FROM admin_users";
$queryusersadminrun = mysqli_query($db, $queryusersadmin);
$count = 1;

while ($datausersadmin = mysqli_fetch_array($queryusersadminrun)) {
?>
                            <tr role="row">
                            <td>
                                    <?= $datausersadmin['username']; ?>
                                </td>
                                <td>
                                    <?= $datausersadmin['email']; ?>
                                </td>
                                <td>
                            <?php if ($datausersadmin['user_access'] == 1) { ?>
                              <span class="badge bg-soft-success text-success">Active</span>
                            <?php } else { ?>
                              <span class="badge bg-soft-danger text-danger">Banned</span>
                            <?php } ?>
                          </td>
                                <td><?= $datausersadmin['date_add_user']; ?></td>

                               
                                <td>  

                                <?php if ($datausersadmin['state'] == 1) { ?>
                                    <span class="badge bg-soft-success text-success">This is a default user</span>

                                    <?php } else { ?>

                                    <button type="button" class="btn btn-block btn-outline-info btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#edituser<?= $count?>">
                                         Update
                                    </button>
                                    <button type="button" class="btn btn-block btn-outline-danger btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#warning-alert-modal<?= $count?>">
                                        Delete
                                    </button>
                                    <?php } ?>
                                    
                                    
                                </td>
                                <td>

                                    <button type="button" class="btn btn-block btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#sendemail<?= $count?>">
                                    Send 
                                    </button>
                                </td>
                               
                            </tr>

                           

                            <?php include 'pages/modaluser.php'; ?>

                            <?php
    $count++;

}
?>

                        </tbody>
                       
                    </table>
                </div>
                <script>

                </script>

                </table>
            </div>
        </div>
    </div>
    <!-- modal add user -->
    <div class="modal fade" id="adduser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add a user 
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form method="post" action="<?=$base_db;?>users.php">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label  class="form-label">full name  </label>
                                <input type="text" name="username" class="form-control" placeholder=" idriss boukmouche "
                                    required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label  class="form-label"> Email</label>

                                <input type="email" name="email" class="form-control" placeholder="info@boukmouche.rf.gd" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label  class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" 
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label"> Re-enter the password</label>
                                <input type="password" class="form-control" name="rep_password"
                                     required>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select id="select_text" class="form-control"  name="user_access" >
                                  
                                    <option selected style="font-size: 20px;" value="1">active </option>
                                    <option style="font-size: 20px;" value="0">banned </option>
                                    
                                </select>
                            </div>
                        </div>
                        

                    </div>
                    <!-- button update -->
                    <div class="col-md-12">
                        <div class="mb-6" style="
    align-items: center;
    text-align: center;
">
                            <button type="submit" class="btn btn-primary"  name="adduser">Add</button>
                        </div>
                    </div>
</form>



            </div>
        </div>

    </div>
</div></div>