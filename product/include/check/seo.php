<?php
require '../init.php';
$upseo = "SELECT * FROM basic_setup";
$upseorun = mysqli_query($db, $upseo);
$dataupseo = mysqli_fetch_array($upseorun);
$target_dir = "../../upload/seo/";
if (isset($_POST['seo'])) {

    $id = $_POST['id'];

    $icon = $_FILES['icon']['name'];
    if ($icon == "") {
        $icon = $dataupseo['icon'];
    }
    else {
        $picon = Upload('icon', $target_dir);
    }

    $background = $_FILES['background']['name'];
  if ($background == "") {
        $background = $dataupseo['background'];
    }
    else {
        $pbackground = Upload('background', $target_dir);
    }
  
    if ($picon == "error" || $pbackground == "error") {
        header("location:".BASEURL."backend/?editseo&msg=errupload");
    }
    else {
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $keyword = mysqli_real_escape_string($db, $_POST['keyword']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $copyright = mysqli_real_escape_string($db, $_POST['copyright']);
    $coplink = mysqli_real_escape_string($db, $_POST['coplink']);
    if (empty($coplink)) {
        $coplink = '#';
    }   
  //   $theme = mysqli_real_escape_string($db, $_POST['theme']);
    $google_an = mysqli_real_escape_string($db, $_POST['google_an']);

        $query = "UPDATE basic_setup SET ";
        $query .= "icon='$icon',";
        $query .= "background='$background',";
        $query .= "title='$title',";
        $query .= "copyright='$copyright',";
        $query .= "coplink='$coplink',";
        $query .= "keyword='$keyword',";
        //$query .= "theme='$theme',";
        $query .= "google_an='$google_an',";
        $query .= "description='$description' WHERE id='$id'";
        echo $query;
    
        $queryrun = mysqli_query($db, $query);
        if ($queryrun) {
            header("location:".BASEURL."backend/?editseo&msg=updated");
        }
        else {
            header("location:".BASEURL."backend/?editseo&msg=error");
        }
    }
}
