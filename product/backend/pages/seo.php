

<div class="row">
    <div class="col-md-12">
        <div class="page-title-box">
            <h4 class="page-title">SEO</h4>
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
<form method="post" action="<?=$base_db;?>seo.php" enctype="multipart/form-data">
<input name="id" type="hidden" value="<?= $seodata['id']; ?>">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mt-3 mb-3">
                    <label class="form-label">Upload logo</label>
                    <input name="icon"  type="file" data-plugins="dropify" class="dropify"
                    data-max-file-size="10M" data-allowed-file-extensions="jpg png jpeg gif" data-default-file="<?=$base_img_seo;?><?= $seodata['icon']; ?>" />
                </div>
                <div class="col-md-6 mt-3 mb-3">
                    <label class="form-label">Upload Background</label>
                    <input name="background"  type="file" data-plugins="dropify" class="dropify"
                    data-max-file-size="10M" data-allowed-file-extensions="jpg png jpeg gif" data-default-file="<?=$base_img_seo;?><?= $seodata['background']; ?>" />
                </div>

                <div class="col-md-6 mt-3 mb-3">
                <label>keywords (click Enter after each key word)</label>
                 <input type="text" id="searchfield" name="keyword"  value="<?= $seodata['keyword']?>" >
                </div>
                <div class="col-md-6 mt-3 mb-3">
                    <label>Site description (160 characters recommended)</label>
                    <textarea class="form-control" name="description" maxlength="160" rows="3"
                        placeholder="Enter description..." style="height: 50px;" id="myTextarea"></textarea>
                    <script>document.getElementById("myTextarea").value = "<?= $seodata['description']?>";</script>

                </div>
                <div class="col-md-12 mt-3 mb-3">
                    <label> Website address</label>
                    <input type="text" name="title" value="<?= $seodata['title']?>" class="form-control">
                </div>

            </div>
            <div class="row">

           <div class="form-group col-md-6 mt-3 mb-3">
           <label>Created by</label>
                               <input type="text" name="copyright" value="<?= $seodata['copyright']?>" class="form-control"  placeholder="idriss boukmouche">
</div><div class="form-group col-md-6 mt-3 mb-3">
                    <label>Created by Link</label>
                    <input type="url" name="coplink" value="<?= $seodata['coplink']?>" class="form-control"  placeholder="http://boukmouche.rf.gd">
</div>
<div class="form-group col-md-12 mt-3 mb-3">
                    <label>Google Analytics</label>
                    <input type="text" name="google_an" value="<?= $seodata['google_an']?>" class="form-control"  placeholder="G-31NS1RF254">
</div>

                    </div>
            <div class="row">
                <div class="col-md-12 mt-3 mb-3">
                    <div class="text-sm-end">
                        <button type="submit" name="seo" class="btn btn-success waves-effect waves-light mt-2 me-1" >
                            <i class="mdi mdi-content-save"></i> Save
                        </button>
                    </div>
                </div>
            </div>
            
</form>

</div>
</div>