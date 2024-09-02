<?php
require '../init.php';


//Basic data Services


if (isset($_POST['ubfrs'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $services_title = mysqli_real_escape_string($db, $_POST['services_title']);
    $services_desc = mysqli_real_escape_string($db, $_POST['services_desc']);
    
    
    $query = "UPDATE basic_frontend SET ";
    $query .= "services_title='$services_title', ";
    $query .= "services_desc='$services_desc' ";
    $query .= "WHERE id='$id'";    

    $queryrun = mysqli_query($db, $query);
    if ($queryrun) {
        header("location:".BASEURL."backend/?services&msg=updated");
    }
    else {
        header("location:".BASEURL."backend/?services&msg=error");
    }
};


//Réalisations Services


if (isset($_POST['uralisadata'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $projects_completed = mysqli_real_escape_string($db, $_POST['projects_completed']);
    $happy_clients = mysqli_real_escape_string($db, $_POST['happy_clients']);
    $awards_received = mysqli_real_escape_string($db, $_POST['awards_received']);
    $crazy_ideas = mysqli_real_escape_string($db, $_POST['crazy_ideas']);
    $coffee_cups = mysqli_real_escape_string($db, $_POST['coffee_cups']);
    $hours = mysqli_real_escape_string($db, $_POST['hours']);
    
    
    $query = "UPDATE réalisations SET ";
    $query .= "projects_completed='$projects_completed', ";
    $query .= "happy_clients='$happy_clients', ";
    $query .= "awards_received='$awards_received', ";
    $query .= "crazy_ideas='$crazy_ideas', ";
    $query .= "coffee_cups='$coffee_cups', ";
    $query .= "hours='$hours' ";
    $query .= "WHERE id='$id'";    

    $queryrun = mysqli_query($db, $query);
    if ($queryrun) {
        header("location:".BASEURL."backend/?services&msg=updated");
    }
    else {
        header("location:".BASEURL."backend/?services&msg=error");
    }
};


//add My services


if (isset($_POST['add_service'])) {
    $services_icon = mysqli_real_escape_string($db, $_POST['services_icon']);
    $services_title = mysqli_real_escape_string($db, $_POST['services_title']);
    $services_desc = mysqli_real_escape_string($db, $_POST['services_desc']);
    
    if (empty($services_icon) || empty($services_title) || empty($services_desc)) {
        header("location:".BASEURL."backend/?services&msg=required#services");
        exit();
    }
   
    $sql = "INSERT INTO services (services_icon, services_title, services_desc) 
    VALUES ('$services_icon', '$services_title', '$services_desc')";
    
    if ($db->query($sql) === TRUE) {
        header("location:".BASEURL."backend/?services&msg=secs#services");
    }
    else {
        header("location:".BASEURL."backend/?services&msg=erroradd#services");
    }
};


//edit My services

if (isset($_POST['edit_service'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $services_icon = mysqli_real_escape_string($db, $_POST['services_icon']);
    $services_title = mysqli_real_escape_string($db, $_POST['services_title']);
    $services_desc = mysqli_real_escape_string($db, $_POST['services_desc']);

    if (empty($services_icon) || empty($services_title) || empty($services_desc)) {
        header("location:".BASEURL."backend/?services&msg=required#services");
        exit;
    }
    
    $query = "UPDATE services SET ";
    $query .= "services_icon='$services_icon', ";
    $query .= "services_title='$services_title', ";
    $query .= "services_desc='$services_desc' ";
    $query .= "WHERE id='$id'";    

    $queryrun = mysqli_query($db, $query);
    if ($queryrun) {
        header("location:".BASEURL."backend/?services&msg=updated#services");
    }
    else {
        header("location:".BASEURL."backend/?services&msg=error#services");
    }
};


//delete my service
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $sql = "DELETE FROM services WHERE id='$id'";
    if ($db->query($sql) === TRUE) {
        header("location:".BASEURL."backend/?services&msg=del#services");
    }
    else {
        header("location:".BASEURL."backend/?services&msg=errordel#services");
    }
};
  
  
  