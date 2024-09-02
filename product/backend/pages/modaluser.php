
<div class="modal fade" id="warning-alert-modal<?= $count?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm ">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Are you sure to delete a user?</h4>
                    <br>
                    <?= $datausersadmin['username']; ?>
                    <p class="mt-3"></p>
                    <form method="post" action="<?=$base_db;?>users.php">    
                    <input type="hidden" name="id" value="<?= $datausersadmin['id']?>">          
                    <button  name="delet" class="btn btn-warning my-2" type="submit" >delete</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->







<!-- modal edit -->
<div class="modal fade" id="edituser<?= $count?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog  modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modify User :  <?= $datausersadmin['username']; ?>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
            <form method="post" action="<?=$base_db;?>users.php">
                <input type="hidden" name="id" value="<?= $datausersadmin['id']?>">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label  class="form-label">full name  </label>
                                <input type="text" name="username" class="form-control" placeholder=" idriss boukmouche "
                                   value="<?= $datausersadmin['username']; ?>"  required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label  class="form-label"> Email</label>

                                <input type="email" name="email" class="form-control"  value="<?= $datausersadmin['email']; ?>"  placeholder="info@boukmouche.rf.gd" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label  class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" 
                                    >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label"> Re-enter the password</label>
                                <input type="password" class="form-control" name="rep_password"
                                     >
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select id="select_text" class="form-control" name="user_access" >
                                  
                                    <option selected style="font-size: 20px;" value="1" <?php if($datausersadmin['user_access'] == 1) echo 'selected'; ?>>active </option>
                                    <option style="font-size: 20px;" value="0" <?php if($datausersadmin['user_access'] == 0) echo 'selected'; ?>>banned </option>
                                    
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="user_access_old" value="<?= $datausersadmin['user_access']?>">
                        

                    </div>
                    <!-- button update -->
                    <div class="col-md-12">
                        <div class="mb-6" style="
    align-items: center;
    text-align: center;
">
                            <button type="submit" class="btn btn-primary"  name="edituser"> Update </button>
                        </div>
                    </div>
</form>



            </div>
        </div>

    </div>
</div>


</form>


</div>
        </div>

    </div>
</div>






<div class="modal fade" id="sendemail<?= $count?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-body p-4">
            <form method="post" action="<?=$base_db;?>users.php">

                <div class="text-center">
                    <i class="fa-regular fa-paper-plane h1 text-warning"></i>
                    <h4 class="mt-2">Send an email to</h4>
                    <br>
                    <?= $datausersadmin['username']; ?> / <?= $datausersadmin['email']; ?>
                    <p class="mt-3"></p>
                    <input type="hidden" name="id" value="<?= $datausersadmin['id']?>"/>
<div class="row">
                    <div class="col-md-12">
                            <div class="mb-3">
                                <label  class="form-label"> Current password </label>

                                <input type="password" name="sedpasswor" class="form-control"  required>
                            </div>
                        </div>
                        
</div>
                            <button type="submit" class="btn btn-block btn-outline-warning btn-sm" name="sendusermail">
                            Send 
                                    </button>
                </div>
</form>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->