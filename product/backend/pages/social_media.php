<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">  Social media 
            </h4>
        </div>

    </div>
</div>
<?php
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'secs') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                networking sites added successfully      </div>';
    }

    if ($_GET['msg'] == 'updated') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Your data has been updated successfully      </div>';
    }
    if ($_GET['msg'] == 'erroradd') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Something went wrong adding networking sites, please try again later      </div>';
    }

	if ($_GET['msg'] == 'del') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                networking sites has been successfully deleted   </div>';
    }

	if ($_GET['msg'] == 'errordel') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Something went wrong deleting networking sites, please try again later  </div>';
    }
	if ($_GET['msg'] == 'error') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                An error occurred while updating, please try again  </div>';
    }
	if ($_GET['msg'] == 'exists') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                I`ve already added this to networking sites before  </div>';
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
<!--Location address-->
<form method="post" action="<?=$base_db;?>social_media.php" >

<div class="col-lg-12 col-xl-12">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                    <div class="page-title-box">
            <h4 class="page-title"> Location address </h4>
        </div>
                                        <div class="row">
                                            <div class="col-12">
                                            <input name="id" type="hidden" value="<?= $seodata['id']; ?>">

                                            <input type="text" placeholder="1600 Amphitheatre Parkway Mountain View, CA 94043 US" value="<?= $seodata['address']; ?>" name="address"  class="form-control" >

                                            </div>
                                            <div class="col-12">
                    <div class="text-sm-end mb-3">
                        <button type="submit" name="uaddress"
                            class="btn btn-success waves-effect waves-light mt-2 me-1"  >
                            <i class="mdi mdi-content-save"></i> Save
                        </button>
                    </div>
                </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div>
                            

                            </form>

<!--Basic social media-->
<form method="post" action="<?=$base_db;?>social_media.php" >
<div class="col-lg-12 col-xl-12">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                    <div class="page-title-box">
            <h4 class="page-title"> Basic social media </h4>
        </div>
        <input name="id" type="hidden" value="<?= $bsmdata['id']; ?>">

        <div class="row g-2">
  <div class="col-md-6">
    <div class="form-floating">
      <input type="email" class="form-control"  name="contact_email" placeholder="name@example.com" value="<?= $bsmdata['contact_email']; ?>">
      <label >Contact email</label>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-floating">
      <input type="email" class="form-control" name="s_contact_email" placeholder="name@example.com" value="<?= $bsmdata['s_contact_email']; ?>">
      <label>Secondary contact email</label>
    </div>
  </div>
  <div class="col-md-4">
  <label class="mb-1">Contact Phone number</label>
  <div class="input-group">
    <div class="input-group-prepend">
      <span class="input-group-text">+</span>
    </div>
    <input type="text" class="form-control" name="ncp" placeholder="xx" value="<?= $bsmdata['ncp']; ?>">
    <input type="tel" class="form-control" name="phone_number" placeholder="123456789" value="<?= $bsmdata['phone_number']; ?>">
  </div>
    </div>
    <div class="col-md-4">
  <label  class="mb-1">Contact Mobile number</label>
  <div class="input-group">
    <div class="input-group-prepend">
      <span class="input-group-text">+</span>
    </div>
    <input type="text" class="form-control" name="ncm" placeholder="xx" value="<?= $bsmdata['ncm']; ?>">
    <input type="tel" class="form-control" name="mobile_number" placeholder="123456789" value="<?= $bsmdata['mobile_number']; ?>">
  </div>
    </div>
    <div class="col-md-4">
  <label class="mb-1">Contact Fax number</label>
  <div class="input-group">
    <div class="input-group-prepend">
      <span class="input-group-text">+</span>
    </div>
    <input type="text" class="form-control" name="ncf" placeholder="xx" value="<?= $bsmdata['ncf']; ?>">
    <input type="tel" class="form-control" name="fax_number" placeholder="123456789" value="<?= $bsmdata['fax_number']; ?>">
  </div>
    </div>
</div>

<div class="col-12">
                    <div class="text-sm-end mb-3">
                        <button type="submit" name="ubsm"
                            class="btn btn-success waves-effect waves-light mt-2 me-1"  >
                            <i class="mdi mdi-content-save"></i> Save
                        </button>
                    </div>
                </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            </form>
 <!--Social networking sites-->
                           
<form method="post" action="<?=$base_db;?>social_media.php" onsubmit="return validateForm()">
    <div class="card" id="social_media">
        
        <div class="card-body">
        <div class="page-title-box">
            <h4 class="page-title">  Social networking sites
            </h4>
        </div>
       
        <div class="alert alert-danger" id="alert-Social" style="display:none;"></div>

            <div class="row g-2">
            <div class="col-md-3">
            <select id="select_text" class="form-control" name="icon_social" autocomplete="off">
  <option value="fa fa-facebook">Facebook</option>
  <option value="fa fa-twitter">Twitter</option>
  <option value="fa fa-instagram">Instagram</option>
  <option value="fa fa-linkedin">LinkedIn</option>
  <option value="fa fa-youtube">YouTube</option>
  <option value="fa fa-snapchat">Snapchat</option>
  <option value="fa fa-pinterest">Pinterest</option>
  <option value="fa fa-reddit">Reddit</option>
  <option value="fa fa-tumblr">Tumblr</option>
  <option value="fa fa-flickr">Flickr</option>
  <option value="fa fa-tiktok">TikTok</option>
  <option value="fa fa-whatsapp">WhatsApp</option>
  <option value="fa fa-viber">Viber</option>
  <option value="fa fa-telegram">Telegram</option>
  <option value="fa fa-skype">Skype</option>
  <option value="fa fa-weibo">Weibo</option>
  <option value="fa fa-wechat">WeChat</option>
  <option value="fa fa-vk">VK</option>
  <option value="fa fa-github">GitHub</option>
  <option value="fa fa-stack-overflow">Stack Overflow</option>
  <option value="fa fa-codepen">CodePen</option>
</select>                
</div>
<div class="col-md-9">
<input type="text" placeholder="https://example.com" id="social_link" name="social_link"  class="form-control" >

</div>







                <div class="col-12">
                    <div class="text-sm-end mb-3">
                        <button type="submit" name="usocial"
                            class="btn btn-success waves-effect waves-light mt-2 me-1"  >
                            <i class="mdi mdi-plus"></i> Add
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                <?php
                                if($social_networking_count==0){ ?>
                                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                                        <h5><i class="icon fas fa-exclamation-triangle flex-shrink-0 me-2"></i> </h5>
                                        You are not registered with any of the social networking sites
                                                                             <?php } else { ?> 
                <table id="scroll-horizontal-datatable" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed mt-5" style="width: 252px;">
  <thead>
    <tr>
      <th>Social Networking Site</th>
      <th>Link</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php
$social = "SELECT * FROM social_networking";
$querysocial = mysqli_query($db, $social);
while ($socialdata = mysqli_fetch_array($querysocial)) {
?>
<tr>
      <td><i class="<?= $socialdata['icon_social']; ?> fa-2x"></i></td>
      <td><?= $socialdata['social_link']; ?></td>
      <td><button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?=$socialdata['id']?>"><i class="fas fa-trash-alt"></i></button></td>
</tr>
<!-- Modal -->
<div class="modal fade" id="deleteModal<?=$socialdata['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">warning</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </button>
      </div>
      <div class="modal-body">
      Are you sure to delete the data? This action cannot be undone.      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="<?=$base_db;?>social_media.php?del=<?= $socialdata['id']?>">
          <button type="button" class="btn btn-danger">Yes, delete</button>
        </a>
      </div>
    </div>
  </div>
</div>

    <?php
}
?>
  </tbody>
</table>
<?php
      };
        ?>

                </div>
            </div>

        </div>
        </div>

</form>


