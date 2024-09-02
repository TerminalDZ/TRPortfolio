<?php
require '../init.php';


//Basic data Resume


if (isset($_POST['ubfrs'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $resume_title = mysqli_real_escape_string($db, $_POST['resume_title']);
    $resume_desc = mysqli_real_escape_string($db, $_POST['resume_desc']);
    
    
    $query = "UPDATE basic_frontend SET ";
    $query .= "resume_title='$resume_title', ";
    $query .= "resume_desc='$resume_desc' ";
    $query .= "WHERE id='$id'";    

    $queryrun = mysqli_query($db, $query);
    if ($queryrun) {
        header("location:".BASEURL."backend/?resume&msg=updated");
    }
    else {
        header("location:".BASEURL."backend/?resume&msg=error");
    }
};

//Delete Resume
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $sql = "DELETE FROM resume WHERE id='$id'";
    if ($db->query($sql) === TRUE) {
        header("location:".BASEURL."backend/?resume&msg=del");
    }
    else {
        header("location:".BASEURL."backend/?resume&msg=errordel");
    }
};

//add Resume


if (isset($_POST['add_resume'])) {
    $resume_type = mysqli_real_escape_string($db, $_POST['resume_type']);
    $resume_what = mysqli_real_escape_string($db, $_POST['resume_what']);
    $resume_where = mysqli_real_escape_string($db, $_POST['resume_where']);
    $resume_when_start = mysqli_real_escape_string($db, $_POST['resume_when_start']);
    $resume_when_end = mysqli_real_escape_string($db, $_POST['resume_when_end']);
    $resume_desc = mysqli_real_escape_string($db, $_POST['resume_desc']);
    $resume_add = date("Y-m-d"); 

    if (empty($resume_type) || empty($resume_what) || empty($resume_where) || empty($resume_when_start) || empty($resume_when_end) || empty($resume_desc)) {
        header("location:".BASEURL."backend/?resume&msg=required");
        exit();
    }
   
    $sql = "INSERT INTO resume (resume_type, resume_what, resume_where, resume_when_start, resume_when_end, resume_desc, resume_add) 
    VALUES ('$resume_type', '$resume_what', '$resume_where', '$resume_when_start', '$resume_when_end', '$resume_desc', '$resume_add')";
    
    if ($db->query($sql) === TRUE) {
        header("location:".BASEURL."backend/?resume&msg=addresume");
    }
    else {
        header("location:".BASEURL."backend/?resume&msg=erroradd");
    }
};

// Edit Resume
if (isset($_POST['edit_resume'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $resume_type = mysqli_real_escape_string($db, $_POST['resume_type']);
    $resume_what = mysqli_real_escape_string($db, $_POST['resume_what']);
    $resume_where = mysqli_real_escape_string($db, $_POST['resume_where']);
    $resume_when_start = mysqli_real_escape_string($db, $_POST['resume_when_start']);
    $resume_when_end = mysqli_real_escape_string($db, $_POST['resume_when_end']);
    $resume_desc = mysqli_real_escape_string($db, $_POST['resume_desc']);
    $resume_add = date("Y-m-d"); 

    if (empty($resume_type) || empty($resume_what) || empty($resume_where) || empty($resume_when_start) || empty($resume_when_end) || empty($resume_desc)) {
        header("location:".BASEURL."backend/?resume&msg=required");
        exit();
    }
   
    $sql = "UPDATE resume SET resume_type='$resume_type', resume_what='$resume_what', resume_where='$resume_where', resume_when_start='$resume_when_start', resume_when_end='$resume_when_end', resume_desc='$resume_desc', resume_add='$resume_add' WHERE id='$id'";
    
    if ($db->query($sql) === TRUE) {
        header("location:".BASEURL."backend/?resume&msg=updated");
    }
    else {
        header("location:".BASEURL."backend/?resume&msg=error");
    }
};
