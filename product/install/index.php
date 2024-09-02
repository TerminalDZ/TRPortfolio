<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Installer TRPortfolio</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="Coderthemes" name="author">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- App favicon -->
      <link rel="shortcut icon" href="logo.png">
      <!-- Bootstrap css -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <!-- App css -->
      <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style">
      <!-- icons -->
      <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
      <!-- Head js -->
      <script src="assets/js/head.js"></script>
   </head>
   <body>
      <div>
         <div class="content-page" style="
            margin-left: auto !important;
            ">
            <div class="content">
               <div class="container-fluid">
                  <div class="row text-center">
                     <div class="col-12">
                        <div class="page-title-box">
                           <h4 class="page-title">Installer TRPortfolio </h4>
                        </div>
                     </div>
                  </div>
                  <?php
if (isset($_GET['msg'])) {

	if ($_GET['msg'] == 'requirements') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                There is an error with the permissions or requirements. Please check your server information  </div>';
    }
    if ($_GET['msg'] == 'nodatabase') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Failed to connect to MySQL  </div>';
    }
    if ($_GET['msg'] == 'installfail') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                There was an error uploading data to a database </div>';
    }
    if ($_GET['msg'] == 'err') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                There was an error connecting to the database </div>';
    }

};
echo '<script>
    setTimeout(function() {
        document.getElementById("alert-box").style.animation = "fadeOut 0.5s";
        document.getElementById("alert-box").style.webkitAnimation = "fadeOut 0.5s";
        setTimeout(function() {
            document.getElementById("alert-box").style.display = "none";
        }, 500);
    }, 10000);
</script>';
?>
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                              <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
                              <li class="nav-item">
                                    <a class="nav-link rounded-0 pt-2 pb-2  <?php if(strpos($_SERVER['REQUEST_URI'], 'install') !== false) { echo 'active'; } ?>">
                                        <i class="mdi mdi-download-box-outline me-1"></i>
                                        <span class="d-none d-sm-inline">Step 1 - Directory permissions & requirements</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a  class="nav-link rounded-0 pt-2 pb-2 <?php if(strpos($_SERVER['REQUEST_URI'], 'database') !== false || strpos($_SERVER['REQUEST_URI'], 'profile') !== false || strpos($_SERVER['REQUEST_URI'], 'finish') !== false) { echo 'active'; } ?>">
                                        <i class="mdi mdi-database-arrow-down-outline me-1"></i>
                                        <span class="d-none d-sm-inline">Step 2 - Database Information</span>
                                    </a>
                                </li>


                                 <li class="nav-item" >
                                    <a  class="nav-link rounded-0 pt-2 pb-2 <?php if(strpos($_SERVER['REQUEST_URI'], 'profile') !== false || strpos($_SERVER['REQUEST_URI'], 'finish') !== false ) { echo 'active'; } ?>">
                                    <i class="mdi mdi-face-profile me-1"></i>
                                    <span class="d-none d-sm-inline">Step 3 - Profile Info</span>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link rounded-0 pt-2 pb-2 <?php if(strpos($_SERVER['REQUEST_URI'], 'finish') !== false)  { echo 'active'; } ?>">
                                    <i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>
                                    <span class="d-none d-sm-inline">Step 4 - Finish</span>
                                    </a>
                                 </li>
                              </ul>
                              <div class="tab-content mb-0 b-0 pt-0">
                                     
                                          <?php
                            if (isset($_GET['database'])) {
                                include('pages/database.php');
                            }elseif (isset($_GET['profile'])) {
                                include('pages/profile.php');
                            }elseif (isset($_GET['finish'])) {
                                include('pages/finish.php');
                            }else {
                                include('pages/install.php');
                            };
                        ?>
                                          
                              <!-- tab-content -->
                           </div>
                           <!-- end #rootwizard-->
                        </div>
                        <!-- end card-body -->
                     </div>
                     <!-- end card-->
                  </div>
                  <!-- end col -->
               </div>
               <!-- end row -->
            </div>
            <!-- container -->
         </div>
         <!-- content -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->
      </div>
      <!-- Vendor js -->
      <script src="assets/js/vendor.min.js"></script>
      <!-- Plugins js-->
      <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
      <!-- Init js-->
      <script src="assets/js/pages/form-wizard.init.js"></script>
      <!-- App js -->
      <script src="assets/js/app.min.js"></script>
      <script>
    const inputs = document.querySelectorAll('input');
    inputs.forEach(input => {
      input.addEventListener('blur', () => {
        if (!input.value) {
          input.classList.add('is-invalid');
        } else {
          input.classList.remove('is-invalid');
        }
      });
    });
  const form = document.querySelector('#accountForm');
  form.addEventListener('submit', event => {
  const inputs = document.querySelectorAll('input');
  let formIsValid = true;
  inputs.forEach(input => {
  if (!input.value) {
  input.classList.add('is-invalid');
  formIsValid = false;
  }
  });
  if (!formIsValid) {
  event.preventDefault();
  }
  });
      </script>
   </body>
</html>