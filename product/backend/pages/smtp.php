<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">  SMTP 
            </h4>
        </div>

    </div>
</div>

<?php
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'edit') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                smtp data updated successfully   </div>';
    }
    if ($_GET['msg'] == 'send') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Your message has been sent successfully, please check your mailbox     </div>';
    }

	if ($_GET['msg'] == 'errsend') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                There was an error sending, please check smtp data and resend  </div>';
    }

	if ($_GET['msg'] == 'error') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                There was an error updating the data, please try again later  </div>';
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

<form method="post" action="<?=$base_db;?>smtp.php" >
    <div class="card">
        <div class="card-body">
            <div class="row">
            <input type="hidden" name="id" value="<?= $smtpdata['id']; ?>">

            <div class="col-md-6 mt-2 mb-2">
                    <label class="mb-1">Host</label>
                    <input type="text"  name="host"   class="form-control"
                     value="<?= $smtpdata['host']; ?>" required>
                </div>
                <div class="col-md-6 mt-2 mb-2">
                    <label class="mb-1">Port</label>
                    <input type="text"  name="port"  value="<?= $smtpdata['port']; ?>"  class="form-control"
                    required>
                </div>
                <div class="col-md-6 mt-2 mb-2">
                    <label class="mb-1">Username</label>
                    <input type="text"  name="usernamesmtp" value="<?= $smtpdata['usernamesmtp']; ?>"  class="form-control"
                    required >
                </div>
                <div class="col-md-6 mt-2 mb-2">
                    <label class="mb-1">Password</label>
                    <input type="password"  name="passwordsmtp" value="<?= $smtpdata['passwordsmtp']; ?>"  class="form-control"
                    required>
                </div>
                <div class="col-md-6 mt-2 mb-2">
                    <label class="mb-1">SetFrom</label>
                    <input type="text"  name="setfrom"   value="<?= $smtpdata['setfrom']; ?>" class="form-control"
                    required>
                </div>
                <div class="col-md-6 mt-2 mb-2">

                    <label class="mb-1">SMTPAuth</label>
                    <select id="select_text" class="form-control" name="smtpauth" required>
                                    
                                   <option <?php if($smtpdata['smtpauth'] == "true") echo 'selected'; ?> value="true">TRUE</option>
                                        <option  <?php if($smtpdata['smtpauth'] == "false") echo 'selected'; ?> value="false" >FALSE</option>
                                        
                                   
                                </select>

                </div>

                <div class="col-md-6 mt-2 mb-2">
                    <label class="mb-1">SMTPSecure</label>
                    <select id="select_text" class="form-control" name="smtpsecure" required>
                                    
                                   
                                        <option <?php if($smtpdata['smtpsecure'] == "ssl") echo 'selected'; ?> value="ssl" >SSL</option>
                                        <option <?php if($smtpdata['smtpsecure'] == "tls") echo 'selected'; ?> value="tls">TLS</option>
                                   
                                </select>
                </div>
              
                
                <div class="col-md-6 mt-1 mb-1">
<br>
                    <button type="button" 
                            class="btn btn-info waves-effect waves-light mt-2 me-1" style="
    width: 100%;
" data-bs-toggle="modal" data-bs-target="#smtptest">
<i class="fa-solid fa-check-double"></i>SMTP Test 
                        </button>
                </div>
                

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="text-sm-end">
                        <button type="submit" name="usmtp"
                            class="btn btn-success waves-effect waves-light mt-2 me-1">
                            <i class="mdi mdi-content-save"></i> Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
</form>
<div class="modal fade" id="smtptest" tabindex="-1" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myCenterModalLabel">test smtp </h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <form method="post" action="<?=$base_db;?>smtp.php" >

                                                    <div class="col-md-12 mt-2 mb-2">
                    <label class="mb-1"> Email</label>
                    <input type="email"  name="setfrom"    class="form-control"
                    required>
                </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close </button>
                                                        <button type="submit" name="sendsmtp" class="btn btn-primary">Send </button>
                                                    </div>
                                                    </form>

                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div>
</div>
</div>