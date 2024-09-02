<?php
if (isset($_GET["msg"]))
{
    if ($_GET["msg"] == "delet")
    {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Messages have been deleted successfully    </div>';
    }
    if ($_GET["msg"] == "deleterr")
    {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Something went wrong delete messages about again later   </div>';
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
<div class="col-xl-12" id="visitors">
	<div class="card">
		<div class="card-body">
			<h4 class="header-title mb-4">Visitors</h4>

			<ul class="nav nav-pills navtab-bg nav-justified" role="tablist">
				<li class="nav-item" role="presentation">
					<a href="#all" data-bs-toggle="tab" aria-expanded="false" class="nav-link active" aria-selected="true" role="tab">
						All (<?=$visitor_counts
?>)
					</a>
				</li>
				<li class="nav-item" role="presentation">
					<a href="#today" data-bs-toggle="tab" aria-expanded="true" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
						Today (<?=$visitortoday_counts
?>)
					</a>
				</li>
				<li class="nav-item" role="presentation">
					<a href="#week" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
						Week (<?=$visitorweek_counts
?>)
					</a>
				</li>
				<li class="nav-item" role="presentation">
					<a href="#month" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
						Month (<?=$visitormonth_counts
?>)
					</a>
				</li>
				<li class="nav-item" role="presentation">
					<a href="#year" data-bs-toggle="tab" aria-expanded="false" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
						Year (<?=$visitoryear_counts?>)
					</a>
				</li>
			</ul>
			<button type="button" class="btn btn-danger btn-icon-split mt-2 mb-2" id="delete-button" style="display:none;width: 100%" data-bs-toggle="modal" data-bs-target="#confirmModal">Delete</button>

			<div class="tab-content">
				<div class="tab-pane active" id="all" role="tabpanel">
					<form method="post" action="<?=$base_db
?>visitor.php">
						<div class="col-lg-12 col-xl-12">
							<div class="widget-rounded-circle card">
								<div class="card-body">

									<div class="col-md-12">
										<div class="card">
											<div class="row" style="margin: 40px;">
												<div class="col-sm-12">
													<?php if ($visitor_counts == 0)
{ ?>
													<div class="alert alert-warning d-flex align-items-center" role="alert">
														<h5><i class="icon fas fa-exclamation-triangle flex-shrink-0 me-2"></i> </h5>
														Currently there are no visitors!
													</div>
													<?php
}
else
{ ?>
													<table id="visitor1" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed" style="width: 252px;">
														<thead>
															<tr>
																<th>Action</th>
																<th>Ip</th>
																<th>Device</th>
																<th>OS</th>
																<th>Browser</th>
																<th>On Add</th>
																<th>More info</th>
															</tr>
														</thead>
														<tbody>
															<?php
    $queryvi = "SELECT * FROM visitor";
    $queryvirun = mysqli_query($db, $queryvi);
    while ($datavi = mysqli_fetch_array($queryvirun))
    { ?>
															<tr role="row">
																<td><input type="checkbox" name="visitor_ids[]" value="<?=$datavi["id"] ?>" onclick="toggleDeleteButton()"></td>
																<td><?=$datavi["user_ip"] ?></td>
																<td><?=$datavi["TYPE"] ?></td>
																<td><?=$datavi["os"] ?></td>
																<td><?=$datavi["browser_name"] ?></td>
																<td><?=$datavi["added_on"] ?></td>
																<td>
																	<button type="button" class="btn btn-primary btn-icon" data-bs-toggle="modal" data-bs-target="#moreinfo<?=$datavi["id"] ?>">
																		<i class="bi bi-info-circle"></i> Info
																	</button>
																</td>


															</tr>
															<?php
    }
?>
														</tbody>
													</table>
													<?php
} ?>
												</div>
											</div>
										</div>
									</div> <!-- end row-->
								</div>
							</div>
						</div> <!-- end col-->
				</div>
				<div class="tab-pane show" id="today" role="tabpanel">
					<div class="col-lg-12 col-xl-12">
						<div class="widget-rounded-circle card">
							<div class="card-body">


								<div class="col-md-12">
									<div class="card">
										<div class="row" style="margin: 40px;">
											<div class="col-sm-12">
												<?php if ($visitortoday_counts == 0)
{ ?>
												<div class="alert alert-warning d-flex align-items-center" role="alert">
													<h5><i class="icon fas fa-exclamation-triangle flex-shrink-0 me-2"></i> </h5>
													Currently there are no visitors today!
												</div>
												<?php
}
else
{ ?>
												<table id="visitor2" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed" style="width: 252px;">
													<thead>
														<tr>
															<th>Ip</th>
															<th>Device</th>
															<th>OS</th>
															<th>Browser</th>
															<th>On Add</th>
															<th>More info</th>
														</tr>
													</thead>
													<tbody>
														<?php
    $current_date = date("Y-m-d");
    $queryvi = "SELECT * FROM visitor WHERE date_visited = '$current_date'";
    $queryvirun = mysqli_query($db, $queryvi);
    while ($datavi = mysqli_fetch_array($queryvirun))
    { ?>
														<tr role="row">
															<td><?=$datavi["user_ip"] ?></td>
															<td><?=$datavi["TYPE"] ?></td>
															<td><?=$datavi["os"] ?></td>
															<td><?=$datavi["browser_name"] ?></td>
															<td><?=$datavi["added_on"] ?></td>
															<td>
																<button type="button" class="btn btn-primary btn-icon" data-bs-toggle="modal" data-bs-target="#moreinfo<?=$datavi["id"] ?>">
																	<i class="bi bi-info-circle"></i> Info
																</button>
															</td>


														</tr>
														<?php
    }
?>
													</tbody>
												</table>
												<?php
} ?>
											</div>
										</div>
									</div>
								</div> <!-- end row-->
							</div>
						</div>
					</div> <!-- end col-->
				</div>
				<div class="tab-pane" id="week" role="tabpanel">
					<div class="col-lg-12 col-xl-12">
						<div class="widget-rounded-circle card">
							<div class="card-body">


								<div class="col-md-12">
									<div class="card">
										<div class="row" style="margin: 40px;">
											<div class="col-sm-12">
												<?php if ($visitorweek_counts == 0)
{ ?>
												<div class="alert alert-warning d-flex align-items-center" role="alert">
													<h5><i class="icon fas fa-exclamation-triangle flex-shrink-0 me-2"></i> </h5>
													Currently there are no visitors this week!
												</div>
												<?php
}
else
{ ?>
												<table id="visitor3" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed" style="width: 252px;">
													<thead>
														<tr>
															<th>Ip</th>
															<th>Device</th>
															<th>OS</th>
															<th>Browser</th>
															<th>On Add</th>
															<th>More info</th>
														</tr>
													</thead>
													<tbody>
														<?php
    $date_one_week_ago = date("Y-m-d", strtotime("-1 week"));
    $queryvi = "SELECT * FROM visitor WHERE date_visited >= '$date_one_week_ago'";
    $queryvirun = mysqli_query($db, $queryvi);
    while ($datavi = mysqli_fetch_array($queryvirun))
    { ?>
														<tr role="row">
															<td><?=$datavi["user_ip"] ?></td>
															<td><?=$datavi["TYPE"] ?></td>
															<td><?=$datavi["os"] ?></td>
															<td><?=$datavi["browser_name"] ?></td>
															<td><?=$datavi["added_on"] ?></td>
															<td>
																<button type="button" class="btn btn-primary btn-icon" data-bs-toggle="modal" data-bs-target="#moreinfo<?=$datavi["id"] ?>">
																	<i class="bi bi-info-circle"></i> Info
																</button>
															</td>


														</tr>
														<?php
    }
?>
													</tbody>
												</table>
												<?php
} ?>
											</div>
										</div>
									</div>
								</div> <!-- end row-->
							</div>
						</div>
					</div> <!-- end col-->
				</div>
				<div class="tab-pane" id="month" role="tabpanel">
					<div class="widget-rounded-circle card">
						<div class="card-body">


							<div class="col-md-12">
								<div class="card">
									<div class="row" style="margin: 40px;">
										<div class="col-sm-12">
											<?php if ($visitormonth_counts == 0)
{ ?>
											<div class="alert alert-warning d-flex align-items-center" role="alert">
												<h5><i class="icon fas fa-exclamation-triangle flex-shrink-0 me-2"></i> </h5>
												Currently there are no visitors this month!
											</div>
											<?php
}
else
{ ?>
											<table id="visitor4" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed" style="width: 252px;">
												<thead>
													<tr>
														<th>Ip</th>
														<th>Device</th>
														<th>OS</th>
														<th>Browser</th>
														<th>On Add</th>
														<th>More info</th>
													</tr>
												</thead>
												<tbody>
													<?php
    $date_one_month_ago = date("Y-m-d", strtotime("-1 month"));
    $queryvi = "SELECT * FROM visitor WHERE date_visited >= '$date_one_month_ago'";
    $queryvirun = mysqli_query($db, $queryvi);
    while ($datavi = mysqli_fetch_array($queryvirun))
    { ?>
													<tr role="row">
														
														<td><?=$datavi["user_ip"] ?></td>
														<td><?=$datavi["TYPE"] ?></td>
														<td><?=$datavi["os"] ?></td>
														<td><?=$datavi["browser_name"] ?></td>
														<td><?=$datavi["added_on"] ?></td>
														<td>
															<button type="button" class="btn btn-primary btn-icon" data-bs-toggle="modal" data-bs-target="#moreinfo<?=$datavi["id"] ?>">
																<i class="bi bi-info-circle"></i> Info
															</button>
														</td>


													</tr>
													<?php
    }
?>
												</tbody>
											</table>
											<?php
} ?>
										</div>
									</div>
								</div>
							</div> <!-- end row-->
						</div>
					</div>
				</div> <!-- end col-->
                <div class="tab-pane" id="year" role="tabpanel">
					<div class="widget-rounded-circle card">
						<div class="card-body">


							<div class="col-md-12">
								<div class="card">
									<div class="row" style="margin: 40px;">
										<div class="col-sm-12">
											<?php if ($visitoryear_counts == 0)
{ ?>
											<div class="alert alert-warning d-flex align-items-center" role="alert">
												<h5><i class="icon fas fa-exclamation-triangle flex-shrink-0 me-2"></i> </h5>
												Currently there are no visitors this year!
											</div>
											<?php
}
else
{ ?>
											<table id="visitor5" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed" style="width: 252px;">
												<thead>
													<tr>
														<th>Ip</th>
														<th>Device</th>
														<th>OS</th>
														<th>Browser</th>
														<th>On Add</th>
														<th>More info</th>
													</tr>
												</thead>
												<tbody>
													<?php
    $date_one_year_ago = date("Y-m-d", strtotime("-1 year"));
    $queryvi = "SELECT * FROM visitor WHERE date_visited >= '$date_one_year_ago'";
    $queryvirun = mysqli_query($db, $queryvi);
    while ($datavi = mysqli_fetch_array($queryvirun))
    { ?>
													<tr role="row">
														
														<td><?=$datavi["user_ip"] ?></td>
														<td><?=$datavi["TYPE"] ?></td>
														<td><?=$datavi["os"] ?></td>
														<td><?=$datavi["browser_name"] ?></td>
														<td><?=$datavi["added_on"] ?></td>
														<td>
															<button type="button" class="btn btn-primary btn-icon" data-bs-toggle="modal" data-bs-target="#moreinfo<?=$datavi["id"] ?>">
																<i class="bi bi-info-circle"></i> Info
															</button>
														</td>


													</tr>
													<?php
    }
?>
												</tbody>
											</table>
											<?php
} ?>
										</div>
									</div>
								</div>
							</div> <!-- end row-->
						</div>
					</div>
				</div> <!-- end col-->
			</div>

		</div>
	</div>
</div> <!-- end card-->
</div>

<?php
$queryvi = "SELECT * FROM visitor";
$queryvirun = mysqli_query($db, $queryvi);
while ($datavi = mysqli_fetch_array($queryvirun))
{ ?>
<!-- Modal more info -->

<div id="moreinfo<?=$datavi["id"] ?>" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-sm modal-right">
		<div class="modal-content">
			<div class="modal-header border-0">
				Information about a visitor: <?=$datavi["user_ip"] ?>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				Ip : <?=$datavi["user_ip"] ?> <br>
				Device : <?=$datavi["TYPE"] ?><br>
				OS : <?=$datavi["os"] ?><br>
				Browser : <?=$datavi["browser_name"] ?> / Version: <?=$datavi["browser_version"] ?><br>
				Country : <?php if ($datavi["country"] == "fail")
    { ?><span class="badge bg-soft-danger text-danger">Error</span> <?php
    }
    else
    { ?><span class="badge bg-soft-success text-success"><?=$datavi["country"] ?></span><?php
    } ?> / <?php if ($datavi["countryCode"] == "fail")
    { ?><span class="badge bg-soft-danger text-danger">Error</span> <?php
    }
    else
    { ?><span class="badge bg-soft-success text-success"><?=$datavi["countryCode"] ?></span><?php
    } ?><br>
				Region : <?php if ($datavi["region"] == "fail")
    { ?><span class="badge bg-soft-danger text-danger">Error</span> <?php
    }
    else
    { ?><span class="badge bg-soft-success text-success"><?=$datavi["region"] ?></span><?php
    } ?> / City : <?php if ($datavi["city"] == "fail")
    { ?><span class="badge bg-soft-danger text-danger">Error</span> <?php
    }
    else
    { ?><span class="badge bg-soft-success text-success"><?=$datavi["city"] ?></span><?php
    } ?><br>
				Zip code : <?php if ($datavi["zip"] == "fail")
    { ?><span class="badge bg-soft-danger text-danger">Error</span> <?php
    }
    else
    { ?><span class="badge bg-soft-success text-success"><?=$datavi["zip"] ?></span><?php
    } ?><br>
				Latitude : <?php if ($datavi["latitude"] == "fail")
    { ?><span class="badge bg-soft-danger text-danger">Error</span> <?php
    }
    else
    { ?><span class="badge bg-soft-success text-success"><?=$datavi["latitude"] ?></span><?php
    } ?> / Longitude : <?php if ($datavi["longitude"] == "fail")
    { ?><span class="badge bg-soft-danger text-danger">Error</span> <?php
    }
    else
    { ?><span class="badge bg-soft-success text-success"><?=$datavi["longitude"] ?></span><?php
    } ?><br>
				Timezone : <?php if ($datavi["timezone"] == "fail")
    { ?><span class="badge bg-soft-danger text-danger">Error</span> <?php
    }
    else
    { ?><span class="badge bg-soft-success text-success"><?=$datavi["timezone"] ?></span><?php
    } ?><br>
				ISP : <?php if ($datavi["isp"] == "fail")
    { ?><span class="badge bg-soft-danger text-danger">Error</span> <?php
    }
    else
    { ?><span class="badge bg-soft-success text-success"><?=$datavi["isp"] ?></span><?php
    } ?><br>
				Visited : <?=$datavi["added_on"] ?><br>
				<button type="button" class="btn btn-danger btn-sm mt-2 mb-2" data-bs-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<?php
}
?>

<!-- Modal confirm -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="confirmModalLabel">Delete Confirmation</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				Are you sure you want to delete selected visitors?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-danger" name="delet">DELETE</button>
			</div>
		</div>
	</div>
</div>

</from>
