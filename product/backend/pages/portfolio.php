<div class="row">
    <div class="col-md-12">
        <div class="page-title-box">
            <h4 class="page-title">Portfolio</h4>
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
    if ($_GET['msg'] == 'addportfolio') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Portfolio added successfully   </div>';
    }
    if ($_GET['msg'] == 'erroradd') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Something went wrong adding Portfolio, try again later   </div>';
    }
    
	if ($_GET['msg'] == 'required') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                All required fields must be entered   </div>';
    }
    if ($_GET['msg'] == 'errupload') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                There was an error uploading an image, please try again later  </div>';
    }

    if ($_GET['msg'] == 'del') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Portfolio has been successfully deleted   </div>';
    }

	if ($_GET['msg'] == 'errordel') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Something went wrong deleting Portfolio, please try again later  </div>';
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
<form method="post" action="<?=$base_db;?>portfolio.php" >
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
                            <input type="text" class="form-control"  name="portfolio_title" placeholder="Check Out Some of My Works." value="<?= $bfrdata['portfolio_title']; ?>" >
                            <label >Title</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="portfolio_desc" placeholder="Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do." style="height: 200px;"><?= $bfrdata['portfolio_desc']; ?></textarea>
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


<!--portfolio-->
                          
<div class="card" id="portfolio">
    <div class="card-body">
        <div class="page-title-box">
            <h4 class="page-title">My Portfolio</h4>
        </div>
        <form method="post" action="<?=$base_db;?>portfolio.php" enctype="multipart/form-data">
            <div class="row g-2">
                
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control"  name="portfolio_title" >
                        <label >Title</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" class="form-control"  name="portfolio_types" >
                        <label >Type</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="url" class="form-control"  name="portfolio_url" >
                        <label >Link</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="file" class="form-control"  name="portfolio_img" data-plugins="dropify" class="dropify" data-max-file-size="10M" data-allowed-file-extensions="jpg png jpeg gif">
                        <label >Upload a photo <sup>Ideally, the image should be 800 x 801 or 800 x 1000</sup></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                    <textarea class="form-control" name="portfolio_desc"  style="height: 200px;"></textarea>
                            <label>Description</label>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="text-sm-end mb-3">
                        <button type="submit" name="add_portfolio"
                            class="btn btn-success waves-effect waves-light mt-2 me-1"  >
                            <i class="mdi mdi-plus"></i> Add
                        </button>
                    </div>
                </div>
        </form>  
        <?php
                                if($portfolio_count==0){ ?>
                                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                                        <h5><i class="icon fas fa-exclamation-triangle flex-shrink-0 me-2"></i> </h5>
                                        You have not registered any portfolio!                                     </div>
                                     <?php } else { ?> 
        <table id="scroll-horizontal-datatable" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed mt-5" style="width: 252px;">
                <thead>
                    <tr>
                        <th>Image portfolio</th>
                        <th>Title portfolio</th>
                        <th>Type portfolio</th>
                        <th>Link portfolio</th>
                        <th>Description portfolio</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $portfoliotable = "SELECT * FROM portfolio";
                    $queryportfoliotable = mysqli_query($db, $portfoliotable);
                    while ($portfoliotabledata = mysqli_fetch_array($queryportfoliotable)) {
                    ?>
                        <tr>
                            <td><a type="button" data-bs-toggle="modal" data-bs-target="#viewimgModal<?=$portfoliotabledata['id']?>"><img src="<?=$base_img_portfolio?><?= $portfoliotabledata['portfolio_img']; ?>" alt="<?= $portfoliotabledata['portfolio_title']; ?>" style="width: 40px;"></a></td>
                            <td><?= $portfoliotabledata['portfolio_title']; ?></td>
                            <td><?= $portfoliotabledata['portfolio_types']; ?></td>
                            <td><?= $portfoliotabledata['portfolio_url']; ?></td>
                            <td><textarea class="form-control" disabled><?= $portfoliotabledata['portfolio_desc']; ?></textarea></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?=$portfoliotabledata['id']?>"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?=$portfoliotabledata['id']?>"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <!-- Modal for Delete Portfolio -->
                            <div class="modal fade" id="deleteModal<?=$portfoliotabledata['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <a href="<?=$base_db;?>portfolio.php?del=<?= $portfoliotabledata['id']?>">
                                                            <button type="button" class="btn btn-danger">Yes, delete</button>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   

                             <!-- Modal for View image Portfolio -->
                             <div class="modal fade" id="viewimgModal<?=$portfoliotabledata['id']?>" tabindex="-1" aria-labelledby="editModal<?=$portfoliotabledata['id']?>Label" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title"><?= $portfoliotabledata['portfolio_title']; ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                    <img src="<?=$base_img_portfolio?><?= $portfoliotabledata['portfolio_img']; ?>" alt="<?= $portfoliotabledata['portfolio_title']; ?>">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                
<!-- Modal for Edit Portfolio -->
<div class="modal fade" id="editModal<?=$portfoliotabledata['id']?>" tabindex="-1" role="dialog" aria-labelledby="editModal<?=$portfoliotabledata['id']?>Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModal<?=$portfoliotabledata['id']?>Label">Edit Portfolio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
      <div class="modal-body">
      <form method="post" action="<?=$base_db;?>portfolio.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?=$portfoliotabledata['id']?>">
          <div class="form-group mt-2 mb-2">
            <label for="portfolio_title<?=$id?>">Title</label>
            <input type="text" class="form-control" id="portfolio_title<?=$id?>" name="portfolio_title" value="<?=$portfoliotabledata['portfolio_title']?>">
          </div>
          <div class="form-group mt-2 mb-2">
            <label for="portfolio_types<?=$id?>">Type</label>
            <input type="text" class="form-control" id="portfolio_types<?=$id?>" name="portfolio_types" value="<?=$portfoliotabledata['portfolio_types']?>">
          </div>
          <div class="form-group mt-2 mb-2">
            <label for="portfolio_url<?=$id?>">Link</label>
            <input type="text" class="form-control" id="portfolio_url<?=$id?>" name="portfolio_url" value="<?=$portfoliotabledata['portfolio_url']?>">
          </div>
         
          <div class="form-group mt-2 mb-2">
            <label for="portfolio_desc<?=$id?>">Description</label>
            <textarea class="form-control" id="portfolio_desc<?=$id?>" name="portfolio_desc" style="height: 200px;"><?=$portfoliotabledata['portfolio_desc']?></textarea>
          </div>
             
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           <button type="submit" name="edit_portfolio" class="btn btn-primary">Save changes</button>  
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

