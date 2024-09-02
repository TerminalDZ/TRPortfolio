 <!-- Topbar Start -->
 <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-end mb-0">

    
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span>
                                <?= $_SESSION['username']?>  <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                <a href="?myacount" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
    
                                <!-- item-->
                                <a href="?settings" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a>
    
                                <div class="dropdown-divider"></div>
                                <form action="<?=$base_db;?>access.php" method="post">

                                <!-- item-->
                                <button name="logout" type="submit"  class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </button>
</form>
                            </div>
                        </li>
    
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="<?=$base_backend;?>" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="<?=$base_img_seo?><?= $seodata['icon']; ?>" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="<?=$base_img_seo?><?= $seodata['icon']; ?>" alt="" height="20">
                            </span>
                        </a>
    
                        <a href="<?=$base_backend;?>" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="<?=$base_img_seo?><?= $seodata['icon']; ?>" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="<?=$base_img_seo?><?= $seodata['icon']; ?>" alt="" height="20">
                            </span>
                        </a>
                    </div>
    
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>   
            
                   
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->