<div class="row">
    <div class="col-md-12">
        <div class="page-title-box">
            <h4 class="page-title">Services</h4>
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
    if ($_GET['msg'] == 'secs') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                service added successfully   </div>';
    }
    if ($_GET['msg'] == 'erroradd') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Something went wrong adding service, try again later   </div>';
    }
    
	if ($_GET['msg'] == 'required') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                All required fields must be entered   </div>';
    }

    if ($_GET['msg'] == 'del') {
        echo '<div class="alert alert-success alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                service has been successfully deleted   </div>';
    }

	if ($_GET['msg'] == 'errordel') {
        echo '<div class="alert alert-danger alert-dismissible" role="alert" style="text-align: center; animation: fadeIn 0.5s; -webkit-animation: fadeIn 0.5s;" id="alert-box">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                Something went wrong deleting service, please try again later  </div>';
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

<!-- Réalisations -->
<form method="post" action="<?=$base_db;?>services.php" >
    <div class="col-lg-12 col-xl-12">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="page-title-box">
                    <h4 class="page-title"> Réalisations <sup>(If you do not want the fields to appear, leave the field blank)</sup> </h4>
                    <input name="id" type="hidden" value="<?= $ralisadata['id']; ?>">
                </div>

                <div class="row g-2">
                    <div class="col-md-2">
                        <div class="form-floating">
                            <input type="number" class="form-control"  name="projects_completed" placeholder="1500" value="<?= $ralisadata['projects_completed']; ?>" >
                            <label >PROJECTS COMPLETED</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <input type="number" class="form-control"  name="happy_clients" placeholder="900" value="<?= $ralisadata['happy_clients']; ?>" >
                            <label >HAPPY CLIENTS</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <input type="number" class="form-control"  name="awards_received" placeholder="200" value="<?= $ralisadata['awards_received']; ?>" >
                            <label >AWARDS RECEIVED</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <input type="number" class="form-control"  name="crazy_ideas" placeholder="120" value="<?= $ralisadata['crazy_ideas']; ?>" >
                            <label >CRAZY IDEAS</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <input type="number" class="form-control"  name="coffee_cups" placeholder="1500" value="<?= $ralisadata['coffee_cups']; ?>" >
                            <label >COFFEE CUPS</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-floating">
                            <input type="number" class="form-control"  name="hours" placeholder="7200" value="<?= $ralisadata['hours']; ?>" >
                            <label >HOURS</label>
                        </div>
                    </div>
                    
                </div>

                <div class="col-12">
                    <div class="text-sm-end mb-3">
                        <button type="submit" name="uralisadata"
                            class="btn btn-success waves-effect waves-light mt-2 me-1"  >
                            <i class="mdi mdi-content-save"></i> Save
                        </button>
                    </div>
                </div>
            </div>
        </div>       
    </div>                                                                 
</form>

<!-- Basic data -->
<form method="post" action="<?=$base_db;?>services.php" >
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
                            <input type="text" class="form-control"  name="services_title" placeholder="What Can I Do For You?" value="<?= $bfrdata['services_title']; ?>" >
                            <label >Title</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="services_desc" placeholder="Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do." style="height: 200px;"><?= $bfrdata['services_desc']; ?></textarea>
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


<!--services-->
                          
<div class="card" id="services">
    <div class="card-body">
        <div class="page-title-box">
            <h4 class="page-title">My Services</h4>
        </div>
        <div class="row">
      <form method="post" action="<?=$base_db;?>services.php">
            <div class="col-md-12">
            <select id="select_text" class="form-control" name="services_icon">
                <option value="">Select an icon</option>
                <option value="icon-camera">Camera</option>
                <option value="icon-music">Music</option>
                <option value="icon-cutlery">Cutlery</option>
                <option value="icon-car">Car</option>
                <option value="icon-shopping-cart">Shopping Cart</option>
                <option value="icon-heart">Heart</option>
                <option value="icon-envelope">Envelope</option>
                <option value="icon-globe">Globe</option>
                <option value="icon-briefcase">Briefcase</option>
                <option value="icon-cog">Cog</option>
                <option value="icon-lock">Lock</option>
                <option value="icon-star">Star</option>
                <option value="icon-calendar">Calendar</option>
                <option value="icon-money">Money</option>
                <option value="icon-beer">Beer</option>
                <option value="icon-flag">Flag</option>
                <option value="icon-fire">Fire</option>
                <option value="icon-book">Book</option>
                <option value="icon-rocket">Rocket</option>
                <option value="icon-desktop">Desktop</option>
                <option value="icon-laptop">Laptop</option>
                <option value="icon-mobile-phone">Mobile Phone</option>
                <option value="icon-tablet">Tablet</option>
                <option value="icon-gift">Gift</option>
                <option value="icon-plane">Plane</option>
                <option value="icon-glass">Glass</option>
                <option value="icon-paperclip">Paperclip</option>
                <option value="icon-gears">Gears</option>
                <option value="icon-search">Search</option>
                <option value="icon-cloud">Cloud</option>
                <option value="icon-truck">Truck</option>
                <option value="icon-magic">Magic</option>
                <option value="icon-moon">Moon</option>
                <option value="icon-map-marker">Map Marker</option>
                <option value="icon-graduation-cap">Graduation Cap</option>
                <option value="icon-umbrella">Umbrella</option>
                <option value="icon-trophy">Trophy</option>
                <option value="icon-gavel">Gavel</option>
                <option value="icon-puzzle-piece">Puzzle Piece</option>
                <option value="icon-camera-retro">Camera Retro</option>
                <option value="icon-headphones">Headphones</option>
                <option value="icon-group">Group</option>
                <option value="icon-leaf">Leaf</option>
                <option value="icon-gift">Gift</option>
                <option value="icon-thumbs-up">Thumbs Up</option>
                <option value="icon-thumbs-down">Thumbs Down</option>
                <option value="icon-money">Money</option>
                <option value="icon-user">User</option>
                <option value="icon-flag-checkered">Flag Checkered</option>
                <option value="icon-check">Check</option>
                <option value="icon-check-square">Check Square</option>
                <option value="icon-check-circle">Check Circle</option>
                <option value="icon-times">Times</option>
                <option value="icon-times-circle">Times Circle</option>
                <option value="icon-exclamation">Exclamation</option>
                <option value="icon-exclamation-triangle">Exclamation Triangle</option>
                <option value="icon-question">Question</option>
                <option value="icon-question-circle">Question Circle</option>
                <option value="icon-th-large">Th Large</option>
                <option value="icon-th">Th</option>
                <option value="icon-th-list">Th List</option>
                <option value="icon-check-empty">Check Empty</option>
                <option value="icon-times-circle-o">Times Circle O</option>
                <option value="icon-minus-square">Minus Square</option>
                <option value="icon-minus-square-o">Minus Square O</option>
                <option value="icon-plus-square">Plus Square</option>
                <option value="icon-plus-square-o">Plus Square O</option>
                <option value="icon-circle">Circle</option>
                <option value="icon-circle-o">Circle O</option>
                <option value="icon-microphone">Microphone</option>
                <option value="icon-microphone-slash">Microphone Slash</option>
                <option value="icon-volume-off">Volume Off</option>
                <option value="icon-volume-down">Volume Down</option>
                <option value="icon-volume-up">Volume Up</option>
                <option value="icon-headphones">Headphones</option>
                <option value="icon-print">Print</option>
                <option value="icon-search-plus">Search Plus</option>
                <option value="icon-search-minus">Search Minus</option>
                <option value="icon-power-off">Power Off</option>
                <option value="icon-signal">Signal</option>
                <option value="icon-cog">Cog</option>
                <option value="icon-trash-o">Trash O</option>
                <option value="icon-home">Home</option>
                <option value="icon-file-o">File O</option>
                <option value="icon-clock-o">Clock O</option>
                <option value="icon-road">Road</option>
                <option value="icon-download">Download</option>
                <option value="icon-arrow-circle-o-down">Arrow Circle O Down</option>
                <option value="icon-arrow-circle-o-up">Arrow Circle O Up</option>
                <option value="icon-inbox">Inbox</option>
                <option value="icon-play-circle-o">Play Circle O</option>
                <option value="icon-repeat">Repeat</option>
                <option value="icon-refresh">Refresh</option>
                <option value="icon-list-alt">List Alt</option>
                <option value="icon-lock">Lock</option>
                <option value="icon-flag">Flag</option>
                <option value="icon-headphones">Headphones</option>
                <option value="icon-volume-up">Volume Up</option>
                <option value="icon-volume-down">Volume Down</option>
                <option value="icon-volume-off">Volume Off</option>
                <option value="icon-print">Print</option>
                <option value="icon-location-arrow">Location Arrow</option>
                <option value="icon-angle-left">Angle Left</option>
                <option value="icon-angle-right">Angle Right</option>
                <option value="icon-angle-up">Angle Up</option>
                <option value="icon-angle-down">Angle Down</option>
                <option value="icon-chevron-circle-right">Chevron Circle Right</option>
                <option value="icon-chevron-circle-left">Chevron Circle Left</option>
                <option value="icon-chevron-circle-up">Chevron Circle Up</option>
                <option value="icon-chevron-circle-down">Chevron Circle Down</option>
                <option value="icon-terminal">Terminal</option>
                <option value="icon-code">Code</option>
                <option value="icon-reply-all">Reply All</option>
                <option value="icon-mail-reply-all">Mail Reply All</option>
                <option value="icon-star-half-o">Star Half O</option>
                <option value="icon-star-half-empty">Star Half Empty</option>
                <option value="icon-star-half-full">Star Half Full</option>
                <option value="icon-location-arrow">Location Arrow</option>
                <option value="icon-sun">Sun</option>
                <option value="icon-moon">Moon</option>
                <option value="icon-cog">Cog</option>
                <option value="icon-beer">Beer</option>
                <option value="icon-wrench">Wrench</option>
                <option value="icon-bomb">Bomb</option>
                <option value="icon-code">Code</option>
                <option value="icon-coffee">Coffee</option>
                <option value="icon-heart">Heart</option>
                <option value="icon-star">Star</option>
                <option value="icon-trophy">Trophy</option>
                <option value="icon-flag">Flag</option>
                <option value="icon-key">Key</option>
                <option value="icon-clock">Clock</option>
                <option value="icon-thumbs-up">Thumbs Up</option>
                <option value="icon-thumbs-down">Thumbs Down</option>
                <option value="icon-rocket">Rocket</option>
                <option value="icon-umbrella">Umbrella</option>
                <option value="icon-plane">Plane</option>
                <option value="icon-bus">Bus</option>
                <option value="icon-train">Train</option>
                <option value="icon-ship">Ship</option>
                <option value="icon-map-marker">Map Marker</option>
                <option value="icon-phone">Phone</option>
                <option value="icon-envelope">Envelope</option>
                <option value="icon-lock">Lock</option>
                <option value="icon-unlock">Unlock</option>
                <option value="icon-folder">Folder</option>
                <option value="icon-folder-open">Folder Open</option>
                <option value="icon-copy">Copy</option>
                <option value="icon-paste">Paste</option>
                <option value="icon-cut">Cut</option>
                <option value="icon-save">Save</option>
                <option value="icon-print">Print</option>
                <option value="icon-search">Search</option>
                <option value="icon-file">File</option>
                <option value="icon-file-text">File Text</option>
                <option value="icon-table">Table</option>
                <option value="icon-camera">Camera</option>
                <option value="icon-video-camera">Video Camera</option>
                <option value="icon-microphone">Microphone</option>
                <option value="icon-music">Music</option>
                <option value="icon-headphones">Headphones</option>
                <option value="icon-glass">Glass</option>
                <option value="icon-gift">Gift</option>
                <option value="icon-globe">Globe</option>
                <option value="icon-book">Book</option>
                <option value="icon-newspaper">Newspaper</option>
                <option value="icon-tv">TV</option>
                <option value="icon-bullhorn">Bullhorn</option>
                <option value="icon-flag-checkered">Flag Checkered</option>
                <option value="icon-warning-sign">Warning Sign</option>
                <option value="icon-eye-open">Eye Open</option>
                <option value="icon-eye-close">Eye Close</option>
                <option value="icon-comment">Comment</option>
                <option value="icon-comments">Comments</option>
                <option value="icon-edit">Edit</option>
                <option value="icon-trash">Trash</option>
                <option value="icon-dashboard">Dashboard</option>
                <option value="icon-signal">Signal</option>
                <option value="icon-magic">Magic</option>
                <option value="icon-tasks">Tasks</option>
                <option value="icon-bookmark">Bookmark</option>
                <option value="icon-bookmark-empty">Bookmark Empty</option>
                <option value="icon-home">Home</option>
            </select>
        
            </div>
            <div class="col-md-12 mt-2 mb-2">
                <div class="form-floating">
                    <input type="text" class="form-control"  name="services_title" >
                    <label >Title</label>
                </div>
            </div>
            <div class="col-md-12 mt-2 mb-2">
                <div class="form-floating">
                    <textarea class="form-control" name="services_desc"></textarea>
                    <label>Description<sup>(Please do not write a description of more than 120 characters)</sup></label>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="text-sm-end mb-3">
                <button type="submit" name="add_service"
                    class="btn btn-success waves-effect waves-light mt-2 me-1"  >
                    <i class="mdi mdi-plus"></i> Add
                </button>
            </div>
        </div>
       </form>
       <?php
                                if($services_count==0){ ?>
                                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                                        <h5><i class="icon fas fa-exclamation-triangle flex-shrink-0 me-2"></i> </h5>
                                        You have not registered any of the Services!                                     </div>
                                     <?php } else { ?> 
            <table id="scroll-horizontal-datatable" class="table dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed mt-5" style="width: 252px;">
                <thead>
                    <tr>
                        <th>Service Icon</th>
                        <th>Title Service</th>
                        <th>Description Service</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $servicetable = "SELECT * FROM services";
                    $queryservicetable = mysqli_query($db, $servicetable);
                    while ($servicetabledata = mysqli_fetch_array($queryservicetable)) {
                    ?>
                        <tr>
                            <td><i class="<?= $servicetabledata['services_icon']; ?> fa-2x"></i></td>
                            <td><?= $servicetabledata['services_title']; ?></td>
                            <td><textarea class="form-control" disabled><?= $servicetabledata['services_desc']; ?></textarea></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?=$servicetabledata['id']?>"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?=$servicetabledata['id']?>"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <!-- Modal for Delete Service -->
                            <div class="modal fade" id="deleteModal<?=$servicetabledata['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <a href="<?=$base_db;?>services.php?del=<?= $servicetabledata['id']?>">
                                                            <button type="button" class="btn btn-danger">Yes, delete</button>
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Modal for Edit Service -->
                            <div class="modal fade" id="editModal<?=$servicetabledata['id']?>" tabindex="-1" aria-labelledby="editModal<?=$servicetabledata['id']?>Label" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="editModal<?=$servicetabledata['id']?>Label">Edit Service</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <form method="post" action="<?=$base_db;?>services.php">
                                  <div class="modal-body">
                                  <input type="hidden" name="id" value="<?= $servicetabledata['id']?>">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <select id="select_text" class="form-control" name="services_icon">
                                                <option value="<?= $servicetabledata['services_icon']?>" selected><?= $servicetabledata['services_icon']?></option>
                                                <option value="icon-camera">Camera</option>
                                                <option value="icon-music">Music</option>
                                                <option value="icon-cutlery">Cutlery</option>
                                                <option value="icon-car">Car</option>
                                                <option value="icon-shopping-cart">Shopping Cart</option>
                                                <option value="icon-heart">Heart</option>
                                                <option value="icon-envelope">Envelope</option>
                                                <option value="icon-globe">Globe</option>
                                                <option value="icon-briefcase">Briefcase</option>
                                                <option value="icon-cog">Cog</option>
                                                <option value="icon-lock">Lock</option>
                                                <option value="icon-star">Star</option>
                                                <option value="icon-calendar">Calendar</option>
                                                <option value="icon-money">Money</option>
                                                <option value="icon-beer">Beer</option>
                                                <option value="icon-flag">Flag</option>
                                                <option value="icon-fire">Fire</option>
                                                <option value="icon-book">Book</option>
                                                <option value="icon-rocket">Rocket</option>
                                                <option value="icon-desktop">Desktop</option>
                                                <option value="icon-laptop">Laptop</option>
                                                <option value="icon-mobile-phone">Mobile Phone</option>
                                                <option value="icon-tablet">Tablet</option>
                                                <option value="icon-gift">Gift</option>
                                                <option value="icon-plane">Plane</option>
                                                <option value="icon-glass">Glass</option>
                                                <option value="icon-paperclip">Paperclip</option>
                                                <option value="icon-gears">Gears</option>
                                                <option value="icon-search">Search</option>
                                                <option value="icon-cloud">Cloud</option>
                                                <option value="icon-truck">Truck</option>
                                                <option value="icon-magic">Magic</option>
                                                <option value="icon-moon">Moon</option>
                                                <option value="icon-map-marker">Map Marker</option>
                                                <option value="icon-graduation-cap">Graduation Cap</option>
                                                <option value="icon-umbrella">Umbrella</option>
                                                <option value="icon-trophy">Trophy</option>
                                                <option value="icon-gavel">Gavel</option>
                                                <option value="icon-puzzle-piece">Puzzle Piece</option>
                                                <option value="icon-camera-retro">Camera Retro</option>
                                                <option value="icon-headphones">Headphones</option>
                                                <option value="icon-group">Group</option>
                                                <option value="icon-leaf">Leaf</option>
                                                <option value="icon-gift">Gift</option>
                                                <option value="icon-thumbs-up">Thumbs Up</option>
                                                <option value="icon-thumbs-down">Thumbs Down</option>
                                                <option value="icon-money">Money</option>
                                                <option value="icon-user">User</option>
                                                <option value="icon-flag-checkered">Flag Checkered</option>
                                                <option value="icon-check">Check</option>
                                                <option value="icon-check-square">Check Square</option>
                                                <option value="icon-check-circle">Check Circle</option>
                                                <option value="icon-times">Times</option>
                                                <option value="icon-times-circle">Times Circle</option>
                                                <option value="icon-exclamation">Exclamation</option>
                                                <option value="icon-exclamation-triangle">Exclamation Triangle</option>
                                                <option value="icon-question">Question</option>
                                                <option value="icon-question-circle">Question Circle</option>
                                                <option value="icon-th-large">Th Large</option>
                                                <option value="icon-th">Th</option>
                                                <option value="icon-th-list">Th List</option>
                                                <option value="icon-check-empty">Check Empty</option>
                                                <option value="icon-times-circle-o">Times Circle O</option>
                                                <option value="icon-minus-square">Minus Square</option>
                                                <option value="icon-minus-square-o">Minus Square O</option>
                                                <option value="icon-plus-square">Plus Square</option>
                                                <option value="icon-plus-square-o">Plus Square O</option>
                                                <option value="icon-circle">Circle</option>
                                                <option value="icon-circle-o">Circle O</option>
                                                <option value="icon-microphone">Microphone</option>
                                                <option value="icon-microphone-slash">Microphone Slash</option>
                                                <option value="icon-volume-off">Volume Off</option>
                                                <option value="icon-volume-down">Volume Down</option>
                                                <option value="icon-volume-up">Volume Up</option>
                                                <option value="icon-headphones">Headphones</option>
                                                <option value="icon-print">Print</option>
                                                <option value="icon-search-plus">Search Plus</option>
                                                <option value="icon-search-minus">Search Minus</option>
                                                <option value="icon-power-off">Power Off</option>
                                                <option value="icon-signal">Signal</option>
                                                <option value="icon-cog">Cog</option>
                                                <option value="icon-trash-o">Trash O</option>
                                                <option value="icon-home">Home</option>
                                                <option value="icon-file-o">File O</option>
                                                <option value="icon-clock-o">Clock O</option>
                                                <option value="icon-road">Road</option>
                                                <option value="icon-download">Download</option>
                                                <option value="icon-arrow-circle-o-down">Arrow Circle O Down</option>
                                                <option value="icon-arrow-circle-o-up">Arrow Circle O Up</option>
                                                <option value="icon-inbox">Inbox</option>
                                                <option value="icon-play-circle-o">Play Circle O</option>
                                                <option value="icon-repeat">Repeat</option>
                                                <option value="icon-refresh">Refresh</option>
                                                <option value="icon-list-alt">List Alt</option>
                                                <option value="icon-lock">Lock</option>
                                                <option value="icon-flag">Flag</option>
                                                <option value="icon-headphones">Headphones</option>
                                                <option value="icon-volume-up">Volume Up</option>
                                                <option value="icon-volume-down">Volume Down</option>
                                                <option value="icon-volume-off">Volume Off</option>
                                                <option value="icon-print">Print</option>
                                                <option value="icon-location-arrow">Location Arrow</option>
                                                <option value="icon-angle-left">Angle Left</option>
                                                <option value="icon-angle-right">Angle Right</option>
                                                <option value="icon-angle-up">Angle Up</option>
                                                <option value="icon-angle-down">Angle Down</option>
                                                <option value="icon-chevron-circle-right">Chevron Circle Right</option>
                                                <option value="icon-chevron-circle-left">Chevron Circle Left</option>
                                                <option value="icon-chevron-circle-up">Chevron Circle Up</option>
                                                <option value="icon-chevron-circle-down">Chevron Circle Down</option>
                                                <option value="icon-terminal">Terminal</option>
                                                <option value="icon-code">Code</option>
                                                <option value="icon-reply-all">Reply All</option>
                                                <option value="icon-mail-reply-all">Mail Reply All</option>
                                                <option value="icon-star-half-o">Star Half O</option>
                                                <option value="icon-star-half-empty">Star Half Empty</option>
                                                <option value="icon-star-half-full">Star Half Full</option>
                                                <option value="icon-location-arrow">Location Arrow</option>
                                                <option value="icon-sun">Sun</option>
                                                <option value="icon-moon">Moon</option>
                                                <option value="icon-cog">Cog</option>
                                                <option value="icon-beer">Beer</option>
                                                <option value="icon-wrench">Wrench</option>
                                                <option value="icon-bomb">Bomb</option>
                                                <option value="icon-code">Code</option>
                                                <option value="icon-coffee">Coffee</option>
                                                <option value="icon-heart">Heart</option>
                                                <option value="icon-star">Star</option>
                                                <option value="icon-trophy">Trophy</option>
                                                <option value="icon-flag">Flag</option>
                                                <option value="icon-key">Key</option>
                                                <option value="icon-clock">Clock</option>
                                                <option value="icon-thumbs-up">Thumbs Up</option>
                                                <option value="icon-thumbs-down">Thumbs Down</option>
                                                <option value="icon-rocket">Rocket</option>
                                                <option value="icon-umbrella">Umbrella</option>
                                                <option value="icon-plane">Plane</option>
                                                <option value="icon-bus">Bus</option>
                                                <option value="icon-train">Train</option>
                                                <option value="icon-ship">Ship</option>
                                                <option value="icon-map-marker">Map Marker</option>
                                                <option value="icon-phone">Phone</option>
                                                <option value="icon-envelope">Envelope</option>
                                                <option value="icon-lock">Lock</option>
                                                <option value="icon-unlock">Unlock</option>
                                                <option value="icon-folder">Folder</option>
                                                <option value="icon-folder-open">Folder Open</option>
                                                <option value="icon-copy">Copy</option>
                                                <option value="icon-paste">Paste</option>
                                                <option value="icon-cut">Cut</option>
                                                <option value="icon-save">Save</option>
                                                <option value="icon-print">Print</option>
                                                <option value="icon-search">Search</option>
                                                <option value="icon-file">File</option>
                                                <option value="icon-file-text">File Text</option>
                                                <option value="icon-table">Table</option>
                                                <option value="icon-camera">Camera</option>
                                                <option value="icon-video-camera">Video Camera</option>
                                                <option value="icon-microphone">Microphone</option>
                                                <option value="icon-music">Music</option>
                                                <option value="icon-headphones">Headphones</option>
                                                <option value="icon-glass">Glass</option>
                                                <option value="icon-gift">Gift</option>
                                                <option value="icon-globe">Globe</option>
                                                <option value="icon-book">Book</option>
                                                <option value="icon-newspaper">Newspaper</option>
                                                <option value="icon-tv">TV</option>
                                                <option value="icon-bullhorn">Bullhorn</option>
                                                <option value="icon-flag-checkered">Flag Checkered</option>
                                                <option value="icon-warning-sign">Warning Sign</option>
                                                <option value="icon-eye-open">Eye Open</option>
                                                <option value="icon-eye-close">Eye Close</option>
                                                <option value="icon-comment">Comment</option>
                                                <option value="icon-comments">Comments</option>
                                                <option value="icon-edit">Edit</option>
                                                <option value="icon-trash">Trash</option>
                                                <option value="icon-dashboard">Dashboard</option>
                                                <option value="icon-signal">Signal</option>
                                                <option value="icon-magic">Magic</option>
                                                <option value="icon-tasks">Tasks</option>
                                                <option value="icon-bookmark">Bookmark</option>
                                                <option value="icon-bookmark-empty">Bookmark Empty</option>
                                                <option value="icon-home">Home</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mt-2 mb-2">
                                            <div class="form-floating">
                                                <input type="text" class="form-control"  name="services_title" value="<?=$servicetabledata['services_title']?>">
                                                <label >Title</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2 mb-2">
                                            <div class="form-floating">
                                                <textarea class="form-control" name="services_desc" style="height: 200px;"><?=$servicetabledata['services_desc']?></textarea>
                                                <label>Description</label>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="edit_service" class="btn btn-primary">Save changes</button>
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



