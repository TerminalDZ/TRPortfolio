<?php
require '../init.php';

//Basic data
if (isset($_POST['ubfrs'])) {
    $upabout = "SELECT * FROM basic_frontend";
    $upaboutrun = mysqli_query($db, $upabout);
    $dataupabout = mysqli_fetch_array($upaboutrun);
    $target_dir = "../../upload/about/";

    $id = $_POST['id'];
    $about_img = $_FILES['about_img']['name'];
  if ($about_img == "") {
        $about_img = $dataupabout['about_img'];
    }
    else {
        $plogo = Upload('about_img', $target_dir);
    }
  
    if ($plogo == "error") {
        header("location:".BASEURL."backend/?about&msg=errupload");
    }
    else {
    $about_title = mysqli_real_escape_string($db, $_POST['about_title']);
    $about_desc = mysqli_real_escape_string($db, $_POST['about_desc']);

        $query = "UPDATE basic_frontend SET ";
        $query .= "about_img='$about_img',";
        $query .= "about_title='$about_title',";
        $query .= "about_desc='$about_desc' WHERE id='$id'";
        echo $query;
    
        $queryrun = mysqli_query($db, $query);
        if ($queryrun) {
            header("location:".BASEURL."backend/?about&msg=updated");
        }
        else {
            header("location:".BASEURL."backend/?about&msg=error");
        }
    }
};

//PROFILE 
if (isset($_POST['uporofile'])) {
    $target_dir = "../../upload/cv/";

    $id = $_POST['id'];
    $profile_downloadcv = $_FILES['profile_downloadcv']['name'];
    
    if (empty($profile_downloadcv)) {
        $profile_downloadcv = "#" ;
    } else {
        $plogo = Upload('profile_downloadcv', $target_dir);
        if ($plogo == "error") {
            header("location:".BASEURL."backend/?about&msg=errupload");
            exit;
        }
    }
  
    $profile_desc = mysqli_real_escape_string($db, $_POST['profile_desc']);
    $profile_fullname = mysqli_real_escape_string($db, $_POST['profile_fullname']);
    $profile_birthdate = mysqli_real_escape_string($db, $_POST['profile_birthdate']);
    $profile_job = mysqli_real_escape_string($db, $_POST['profile_job']);
    $profile_website = mysqli_real_escape_string($db, $_POST['profile_website']);
    $profile_email = mysqli_real_escape_string($db, $_POST['profile_email']);

    $query = "UPDATE basic_frontend SET ";
    $query .= "profile_downloadcv='$profile_downloadcv',";
    $query .= "profile_fullname='$profile_fullname',";
    $query .= "profile_birthdate='$profile_birthdate',";
    $query .= "profile_job='$profile_job',";
    $query .= "profile_website='$profile_website',";
    $query .= "profile_desc='$profile_desc',";
    $query .= "profile_email='$profile_email' WHERE id='$id'";
    echo $query;

    $queryrun = mysqli_query($db, $query);
    if ($queryrun) {
        header("location:".BASEURL."backend/?about&msg=updated");
    }
    else {
        header("location:".BASEURL."backend/?about&msg=error");
    }
};

//Skills
if (isset($_POST['uskillsdesc'])) {
    $id = $_POST['id'];
    $skills_desc = mysqli_real_escape_string($db, $_POST['skills_desc']);

        $query = "UPDATE basic_frontend SET ";
        $query .= "skills_desc='$skills_desc' WHERE id='$id'";
        echo $query;
        $queryrun = mysqli_query($db, $query);
        if ($queryrun) {
            header("location:".BASEURL."backend/?about&msg=updatedskills");
        }
        else {
            header("location:".BASEURL."backend/?about&msg=errorskills");
        } 
};


//add skills


if (isset($_POST['add_skills'])) {
    $skills_name = mysqli_real_escape_string($db, $_POST['skills_name']);
    $skills_range = mysqli_real_escape_string($db, $_POST['skills_range']);

    if (empty($skills_name) || empty($skills_range)) {
        header("location:".BASEURL."backend/?about&msg=required#skills");
        exit();
    }
   
    $sql = "INSERT INTO skills (skills_name, skills_range) 
    VALUES ('$skills_name', '$skills_range')";
    
    if ($db->query($sql) === TRUE) {
        header("location:".BASEURL."backend/?about&msg=addskill#skills");
    }
    else {
        header("location:".BASEURL."backend/?about&msg=erroradd#skills");
    }
};


//delete skills
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $sql = "DELETE FROM skills WHERE id='$id'";
    if ($db->query($sql) === TRUE) {
        header("location:".BASEURL."backend/?about&msg=del#skills");
    }
    else {
        header("location:".BASEURL."backend/?about&msg=errordel#skills");
    }
};


//edit skills
if (isset($_POST['edit_skills'])) {   
    $id = $_POST['id'];
    $skills_name = mysqli_real_escape_string($db, $_POST['skills_name']);
    $skills_range = mysqli_real_escape_string($db, $_POST['skills_range']);
    

    if (empty($skills_name) || empty($skills_range)) {
        header("location:".BASEURL."backend/?about&msg=required#skills");
        exit;
        }
    
    $query = "UPDATE skills SET  skills_name = '$skills_name', skills_range = '$skills_range' WHERE id = $id";
    $queryrun = mysqli_query($db, $query);
    
    if ($queryrun) {
        header("location:".BASEURL."backend/?about&msg=updatedskills#skills");
    } else {
        header("location:".BASEURL."backend/?about&msg=errorskills#skills");
    }
};
