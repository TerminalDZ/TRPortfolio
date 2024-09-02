                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title">Themes</h4>
                                </div>
                            </div>
                        </div>     
                        <?php
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'edit') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Theme changed successfully   </div>';
    }
    if ($_GET['msg'] == 'error') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                There was an error changing the theme, please try again later    </div>';
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
                        <!-- end page title --> 
                        <form method="post" action="<?=$base_db;?>theme.php">
                        <input name="id" type="hidden" value="<?= $seodata['id']; ?>">
                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <!-- Simple card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?=$base_backend_image?>themes/1.png" alt="Card image cap">
                                    <?php if ($seodata['theme'] == "one") { ?>
                                    <button class="btn btn-secondary waves-effect waves-light" disabled>Activated</button>
                                    <?php } else { ?>
                                    <button type="submit" name="theme01" class="btn btn-primary waves-effect waves-light">Activate</button>
                                    <?php }; ?></p>
                                </div>
                            </div><!-- end col -->
                            <div class="col-lg-6 col-xl-6">
                                <!-- Simple card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="<?=$base_backend_image?>themes/2.png" alt="Card image cap">
                                    <?php if ($seodata['theme'] == "two") { ?>
                                    <button class="btn btn-secondary waves-effect waves-light" disabled>Activated</button>
                                    <?php } else { ?>
                                    <button type="submit" name="theme02" class="btn btn-primary waves-effect waves-light">Activate</button>
                                    <?php }; ?></p>
                                </div>
                            </div><!-- end col -->
                                    </form>
                        </div>
                        </form>

