<div class="row">
    <div class="col-md-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
        </div>

    </div>
</div>

<div class="row">
                            <div class="col-md-6 col-xl-6">
                                <a href="<?=$base_backend; ?>?contact"><div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-primary">
                                                    <i class="fe-message-circle font-22 avatar-title text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?=$messages ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Communication messages</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div></a> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-6">
                            <a href="<?=$base_backend; ?>?services"><div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-success">
                                                    <i class="fe-grid font-22 avatar-title text-success"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?=$services_count ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Services</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div></a> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-4">
                            <a href="<?=$base_backend; ?>?portfolio"><div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-danger">
                                                    <i class="fe-layout font-22 avatar-title text-danger"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?=$portfolio_count ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Portfolio</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div></a> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-4">
                            <a href="<?=$base_backend; ?>?about#skills">  <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-info">
                                                    <i class="fe-file-text font-22 avatar-title text-info"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?=$skills_count ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Skills</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div></a> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            <div class="col-md-6 col-xl-4">
                            <a href="<?=$base_backend; ?>?resume"> <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-warning">
                                                    <i class="fe-briefcase font-22 avatar-title text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?=$resume_count ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Resume</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> </a><!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-12">
                            <a href="<?=$base_backend; ?>?share"> <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-secondary">
                                                    <i class="fe-share font-22 avatar-title text-secondary"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?=$social_networking_count ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Social networking sites</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div></a> <!-- end col-->
                        </div>
           

<!-- visitors -->
<?php
include 'visitors.php';
?>
