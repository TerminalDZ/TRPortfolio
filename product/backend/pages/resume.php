<div class="row">
    <div class="col-md-12">
        <div class="page-title-box">
            <h4 class="page-title">Resume</h4>
        </div>

    </div>
</div>

<?php
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'updated') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Data has been updated successfully    </div>';
    }
    if ($_GET['msg'] == 'addresume') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                resume added successfully   </div>';
    }
    if ($_GET['msg'] == 'erroradd') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Something went wrong adding resume, try again later   </div>';
    }
    
	if ($_GET['msg'] == 'required') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                All required fields must be entered   </div>';
    }
   

    if ($_GET['msg'] == 'del') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                resume has been successfully deleted   </div>';
    }

	if ($_GET['msg'] == 'errordel') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Something went wrong deleting resume, please try again later  </div>';
    }
    if ($_GET['msg'] == 'error') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                There was an error updating the data       </div>';
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


<!-- Basic data -->
<form method="post" action="<?=$base_db;?>resume.php" >
    <div class="col-lg-12 col-xl-12">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="page-title-box">
                    <h4 class="page-title"> Basic data </h4>
                    <input name="id" type="hidden" value="<?= $bfrdata['id']; ?>">
                </div>

                <div class="row g-2">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control"  name="resume_title" placeholder="Check Out Some of My Works." value="<?= $bfrdata['resume_title']; ?>" >
                            <label >Title</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="resume_desc"  style="height: 200px;"><?= $bfrdata['resume_desc']; ?></textarea>
                            <label>Description</label>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="text-sm-end mb-3">
                        <button type="submit" name="ubfrs"
                            class="btn btn-success waves-effect waves-light mt-2 me-1"  >
                            <i class="mdi mdi-content-save"></i> Save
                        </button>
                    </div>
                </div>
            </div>
        </div>       
    </div>                                                                 
</form>


<!--Resume-->
                          
<div class="card" id="Resume">
    <div class="card-body">
        <div class="page-title-box">
            <h4 class="page-title">My Resume</h4>
        </div>
        <form method="post" action="<?=$base_db;?>resume.php">
            <div class="row g-2">
                
                <div class="col-md-12">
                    <div class="form-floating">
                            <select id="select_text" name="resume_type">
                                <option value="">Select an Type</option>
                                <option value="1">Work Experience</option>
                                <option value="2">Education</option>
                            </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control"  name="resume_what" >
                        <label >What?</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control"  name="resume_where" >
                        <label >Where?</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                    <input type="date" id="resume_when_start" name="resume_when_start" class="form-control flatpickr-input" placeholder="October 9, 2018">                        
                    <label >When did it start?</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                    <input type="date" id="resume_when_end" name="resume_when_end" class="form-control flatpickr-input" placeholder="October 9, 2018">                        
                    <label >When did you finish?<sup> (If you are still studying in this or working in this, choose the same day that you are in now)</sup></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                    <textarea class="form-control" name="resume_desc"  style="height: 200px;"></textarea>
                            <label>Description</label>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="text-sm-end mb-3">
                        <button type="submit" name="add_resume"
                            class="btn btn-success waves-effect waves-light mt-2 me-1"  >
                            <i class="mdi mdi-plus"></i> Add
                        </button>
                    </div>
                </div>
        </form>   
        <?php
                                if($resume_count==0){ ?>
                                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                                        <h5><i class="icon fas fa-exclamation-triangle flex-shrink-0 me-2"></i> </h5>
                                        You have not registered any resume!                                     </div>
                                     <?php } else { ?> 
        <table id="scroll-horizontal-datatable" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed mt-5" style="width: 252px;">
                <thead>
                    <tr>
                        <th>Type resume</th>
                        <th>What resume</th>
                        <th>Where resume</th>
                        <th>When resume</th>
                        <th>Description resume</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $resumetable = "SELECT * FROM resume";
                    $queryresumetable = mysqli_query($db, $resumetable);
                    while ($resumetabledata = mysqli_fetch_array($queryresumetable)) {
                    ?>
                        <tr>
                            <td>
                            <?php if ($resumetabledata['resume_type'] == 1) { ?>
                                Work Experience
                            <?php } elseif ($resumetabledata['resume_type'] == 2) { ?>
                                Education
                            <?php }; ?>
                        </td>
                            <td><?= $resumetabledata['resume_what']; ?></td>
                            <td><?= $resumetabledata['resume_where']; ?></td>
                            <td><?= date('F Y', strtotime($resumetabledata['resume_when_start'])); ?> /  <?php if ($resumetabledata['resume_when_end'] == $resumetabledata['resume_add']) { ?>
                                Present
                                <?php } else { ?>
                                    <?= date('F Y', strtotime($resumetabledata['resume_when_end'])); ?>
                            <?php }; ?></td>
             
                            <td><textarea class="form-control" disabled><?= $resumetabledata['resume_desc']; ?></textarea></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?=$resumetabledata['id']?>"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?=$resumetabledata['id']?>"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <!-- Modal for Delete resume -->
                            <div class="modal fade" id="deleteModal<?=$resumetabledata['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                            <div class="modal-body">
                                                Are you sure to delete the data? This action cannot be undone.      
                                            </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        <a href="<?=$base_db;?>resume.php?del=<?= $resumetabledata['id']?>">
                                                            <button type="button" class="btn btn-danger">Yes, delete</button>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   


                
<!-- Modal for Edit resume -->
<div class="modal fade" id="editModal<?=$resumetabledata['id']?>" tabindex="-1" role="dialog" aria-labelledby="editModal<?=$resumetabledata['id']?>Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModal<?=$resumetabledata['id']?>Label">Edit resume</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
      <div class="modal-body">
      <form method="post" action="<?=$base_db;?>resume.php" >
          <input type="hidden" name="id" value="<?=$resumetabledata['id']?>">
            <div class="row g-2">
                
                <div class="col-md-12">
                    <div class="form-floating">

                            <select id="select_text" class="form-control" name="resume_type">
                            <option value="1" <?php if ($resumetabledata['resume_type']==1) { echo 'selected'; } ?>>Work Experience</option>
<option value="2" <?php if ($resumetabledata['resume_type']==2) { echo 'selected'; } ?>>Education</option>

                            </select>
                            <label >Select an Type</label>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" class="form-control"  name="resume_what" value="<?=$resumetabledata['resume_what']?>">
                        <label >What?</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" class="form-control"  name="resume_where" value="<?=$resumetabledata['resume_where']?>">
                        <label >Where?</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                    <input type="date" id="resume_when_start" name="resume_when_start" class="form-control flatpickr-input" placeholder="October 9, 2018" value="<?=$resumetabledata['resume_when_start']?>">                        
                    <label >When did it start?</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                    <input type="date" id="resume_when_end" name="resume_when_end" class="form-control flatpickr-input" placeholder="October 9, 2018" value="<?=$resumetabledata['resume_when_end']?>">                        
                    <label >When did you finish?</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating">
                    <textarea class="form-control" name="resume_desc"  style="height: 200px;"><?=$resumetabledata['resume_desc']?></textarea>
                            <label>Description</label>
                    </div>
                </div>
                
             
             
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <button type="submit" name="edit_resume" class="btn btn-primary">Save changes</button>  
           </div> 
           </form>

    </div>
  </div>
</div>

                         <?php };?>
                </tbody>
            </table>
            <?php
      };
        ?>
    </div>
</div>


