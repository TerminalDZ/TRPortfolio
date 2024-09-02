<div class="row">
    <div class="col-md-12">
        <div class="page-title-box">
            <h4 class="page-title">About</h4>
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
    if ($_GET['msg'] == 'error') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                There was an error updating the data       </div>';
    }
    if ($_GET['msg'] == 'errupload') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                There was an error uploading  </div>';
    }
};
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
<form method="post" action="<?=$base_db;?>about.php" enctype="multipart/form-data">
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
                            <input type="text" class="form-control"  name="about_title" placeholder="Check Out Some of My Works." value="<?= $bfrdata['about_title']; ?>" >
                            <label >Title</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <textarea class="form-control" name="about_desc"  style="height: 200px;"><?= $bfrdata['about_desc']; ?></textarea>
                            <label>Description</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input name="about_img"  type="file" data-plugins="dropify" class="dropify" data-max-file-size="10M" data-allowed-file-extensions="jpg png jpeg gif" data-default-file="<?=$base_img_about;?><?= $bfrdata['about_img']; ?>" />                            
                            <label >Upload Image</label>
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

<!-- PROFILE data -->
<form method="post" action="<?=$base_db;?>about.php" enctype="multipart/form-data">
    <div class="col-lg-12 col-xl-12">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="page-title-box">
                    <h4 class="page-title"> PROFILE <sup>(If you do not want the fields to appear, leave the field blank)</sup> </h4>
                    <input name="id" type="hidden" value="<?= $bfrdata['id']; ?>">
                </div>

                <div class="row g-2">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <textarea class="form-control" name="profile_desc"  style="height: 200px;"><?= $bfrdata['profile_desc']; ?></textarea>
                            <label>Description</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input name="profile_downloadcv"  type="file" data-plugins="dropify" class="dropify" data-allowed-file-extensions="doc docx pdf txt" data-default-file="<?=$base_img_cv;?><?= $bfrdata['profile_downloadcv']; ?>" />                            
                            <label >Upload File CV</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" id="searchfield" class="form-control"  name="profile_job" value="<?= $bfrdata['profile_job']; ?>" >
                            <label >JOB</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control"  name="profile_fullname" value="<?= $bfrdata['profile_fullname']; ?>" >
                            <label >FULLNAME</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="date" id="profile_birthdate" class="form-control"  name="profile_birthdate" value="<?= $bfrdata['profile_birthdate']; ?>" >
                            <label >BIRTH DATE</label>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control"  name="profile_website" value="<?= $bfrdata['profile_website']; ?>" >
                            <label >WEBSITE</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control"  name="profile_email" value="<?= $bfrdata['profile_email']; ?>" >
                            <label >EMAIL</label>
                        </div>
                    </div>
                    
                   
                </div>


                <div class="col-12">
                    <div class="text-sm-end mb-3">
                        <button type="submit" name="uporofile"
                            class="btn btn-success waves-effect waves-light mt-2 me-1"  >
                            <i class="mdi mdi-content-save"></i> Save
                        </button>
                    </div>
                </div>
            </div>
        </div>       
    </div>                                                                 
</form>


<?php
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'updatedskills') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Data has been updated successfully    </div>';
    }   
    if ($_GET['msg'] == 'errorskills') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                There was an error updating the data       </div>';
    }
    if ($_GET['msg'] == 'required') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                All required fields must be entered  </div>';
    }
    if ($_GET['msg'] == 'erroradd') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Something went wrong adding Skill, try again later  </div>';
    }
    if ($_GET['msg'] == 'del') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Skills has been successfully deleted   </div>';
    }

	if ($_GET['msg'] == 'errordel') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Something went wrong deleting Skills, please try again later  </div>';
    }
    if ($_GET['msg'] == 'addskill') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Skills added successfully   </div>';
    }
};
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
<!-- skills data -->
<form method="post" action="<?=$base_db;?>about.php" id="skills">
    <div class="col-lg-12 col-xl-12">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="page-title-box">
                    <h4 class="page-title"> Skills </h4>
                    <input name="id" type="hidden" value="<?= $bfrdata['id']; ?>">
                </div>

                <div class="row g-2">
                   
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="skills_desc"  style="height: 200px;"><?= $bfrdata['skills_desc']; ?></textarea>
                            <label>Description</label>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <div class="text-sm-end mb-3">
                        <button type="submit" name="uskillsdesc"
                            class="btn btn-success waves-effect waves-light mt-2 me-1"  >
                            <i class="mdi mdi-content-save"></i> Save
                        </button>
                    </div>
                </div>
                                                                      
</form>

<form method="post" action="<?=$base_db;?>about.php">
            <div class="row g-2">
                
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control"  name="skills_name" >
                        <label >Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                <label >Range</label>
                        <input type="number" id="range_02" class="form-control" name="skills_range" class="irs-hidden-input">
                </div>
               
           
                
                <div class="col-12">
                    <div class="text-sm-end mb-3">
                        <button type="submit" name="add_skills"
                            class="btn btn-success waves-effect waves-light mt-2 me-1"  >
                            <i class="mdi mdi-plus"></i> Add
                        </button>
                    </div>
                </div>
        </form>   
        <?php
                                if($skills_count==0){ ?>
                                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                                        <h5><i class="icon fas fa-exclamation-triangle flex-shrink-0 me-2"></i> </h5>
                                        You have not registered any skill!                                     </div>
                                     <?php } else { ?> 
        <table id="scroll-horizontal-datatable" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed mt-5" style="width: 252px;">
                <thead>
                    <tr>
                        <th>Name skills</th>
                        <th>Range skills</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $skillstable = "SELECT * FROM skills";
                    $queryskillstable = mysqli_query($db, $skillstable);
                    while ($skillstabledata = mysqli_fetch_array($queryskillstable)) {
                    ?>
                        <tr>
                         
                            <td><?= $skillstabledata['skills_name']; ?></td>
                            <td><?= $skillstabledata['skills_range']; ?>%</td>
                           
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?=$skillstabledata['id']?>"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?=$skillstabledata['id']?>"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <!-- Modal for Delete skills -->
                            <div class="modal fade" id="deleteModal<?=$skillstabledata['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <a href="<?=$base_db;?>about.php?del=<?= $skillstabledata['id']?>">
                                                            <button type="button" class="btn btn-danger">Yes, delete</button>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   


                
<!-- Modal for Edit skills -->
<div class="modal fade" id="editModal<?=$skillstabledata['id']?>" tabindex="-1" role="dialog" aria-labelledby="editModal<?=$skillstabledata['id']?>Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModal<?=$skillstabledata['id']?>Label">Edit skills</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
      <div class="modal-body">
      <form method="post" action="<?=$base_db;?>about.php" >
          <input type="hidden" name="id" value="<?=$skillstabledata['id']?>">
            <div class="row g-2">
                
               
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" class="form-control"  name="skills_name" value="<?=$skillstabledata['skills_name']?>">
                        <label >Name</label>
                    </div>
                </div>
                <div class="col-md-12">
                <label >Range</label>
                <input type="number" class="form-control" name="skills_range" value="<?=$skillstabledata['skills_range']?>" min="0" max="100">
                </div>
    
             
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <button type="submit" name="edit_skills" class="btn btn-primary">Save changes</button>  
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
    </div>             