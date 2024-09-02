<div class="row">
    <div class="col-md-12">
        <div class="page-title-box">
            <h4 class="page-title">Contact</h4>
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
    if ($_GET['msg'] == 'delet') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Messages have been deleted successfully    </div>';
    }
    if ($_GET['msg'] == 'deleterr') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Something went wrong delete messages about again later   </div>';
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
<form method="post" action="<?=$base_db;?>contact.php" >
<div class="col-lg-12 col-xl-12">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                    <div class="page-title-box">
            <h4 class="page-title"> Basic data </h4>
        </div>
        <input name="id" type="hidden" value="<?= $bfrdata['id']; ?>">

        <div class="row g-2">
  <div class="col-md-12">
    <div class="form-floating">
      <input type="text" class="form-control"  name="contact_title" placeholder="I'd Love To Hear From You." value="<?= $bfrdata['contact_title']; ?>">
      <label >Title</label>
    </div>
  </div>
    <div class="col-md-12">
        <div class="form-floating">
            <textarea class="form-control" name="contact_desc" placeholder="Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do." style="height: 200px;"><?= $bfrdata['contact_desc']; ?></textarea>
            <label>Description</label>
        </div>
    </div>

 
</div>

<div class="col-12">
    <div class="text-sm-end mb-3">
                        <button type="submit" name="ubfrc"
                            class="btn btn-success waves-effect waves-light mt-2 me-1"  >
                            <i class="mdi mdi-content-save"></i> Save
                        </button>
</div>
</div>
 </div>
</div>                                     
 </form>




 <form method="post" action="<?= $base_db; ?>contact.php">
    <div class="col-lg-12 col-xl-12">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="page-title-box d-flex justify-content-between align-items-center">
                    <h4 class="page-title"> Communication messages</h4>
                    
                    <button class="btn btn-outline-warning ml-auto" type="button" id="select-all-button" onclick="toggleAllCheckboxes(this)">Select All</button>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="row" style="margin: 40px;">
                            <div class="col-sm-12">
                                <?php
                                if($messages==0){ ?>
                                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                                        <h5><i class="icon fas fa-exclamation-triangle flex-shrink-0 me-2"></i> </h5>
                                        Currently there are no messages or requests!           
                                     </div>
                                     <?php } else { ?>
                                <table id="alternative-page-datatable" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed" style="width: 252px;">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>On Add</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $querycm = "SELECT * FROM contact";
                                        $querycmrun = mysqli_query($db, $querycm);
                                        while ($datacm = mysqli_fetch_array($querycmrun)) {
                                            ?>
                                            <tr role="row">
                                                <td><input type="checkbox" name="message_ids[]" value="<?= $datacm['id']; ?>" onclick="toggleDeleteButton()"></td>
                                                <td><?= $datacm['name']; ?></td>
                                                <td><?= $datacm['email']; ?></td>
                                                <td><?= $datacm['subject']; ?></td>
                                                <td><?= $datacm['message']; ?></td>
                                                <td><?= $datacm['sent_time']; ?></td>
                                            </tr>
                                        <?php }; ?>
                                    </tbody>
                                </table>
                                <?php
      };
        ?>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger btn-icon-split" id="delete-button" style="display:none;" data-bs-toggle="modal" data-bs-target="#confirmModal">Delete</button>
                    </div>
                </div> <!-- end row-->
            </div>
        </div>
    </div> <!-- end col-->
<!-- Modal confirm -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Delete Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete the selected messages?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" name="delet">DELETE</button>
                </div>
            </div>
        </div>
    </div>
</from>

                            