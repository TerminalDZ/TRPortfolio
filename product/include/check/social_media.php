<?php
require '../init.php';
//add Social networking sites

if (isset($_POST['usocial'])) {
    $icon_social = mysqli_real_escape_string($db, $_POST['icon_social']);
    $social_link = mysqli_real_escape_string($db, $_POST['social_link']);
    
    $check_query = "SELECT * FROM social_networking WHERE icon_social = '$icon_social'";
    $check_result = $db->query($check_query);

    if ($check_result->num_rows > 0) {
        header("location:".BASEURL."backend/?share&msg=exists");
    } else {
        $sql = "INSERT INTO social_networking (icon_social, social_link) 
        VALUES ('$icon_social', '$social_link')";
        if ($db->query($sql) === TRUE) {
            header("location:".BASEURL."backend/?share&msg=secs#social_media");
        }
        else {
            header("location:".BASEURL."backend/?share&msg=erroradd#social_media");
        }
    }
};

//delet Social networking sites
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $sql = "DELETE FROM social_networking WHERE id='$id'";
    if ($db->query($sql) === TRUE) {
        header("location:".BASEURL."backend/?share&msg=del#social_media");
    }
    else {
        header("location:".BASEURL."backend/?share&msg=errordel#social_media");
    }
};

//save address
if (isset($_POST['uaddress'])) {
    $id = $_POST['id'];
    $address = mysqli_real_escape_string($db, $_POST['address']);

        $query = "UPDATE basic_setup SET ";
        $query .= "address='$address' WHERE id='$id'";
        echo $query;
    
        $queryrun = mysqli_query($db, $query);
        if ($queryrun) {
            header("location:".BASEURL."backend/?share&msg=updated");
        }
        else {
            header("location:".BASEURL."backend/?share&msg=error");
        }
    };
//Basic social media


if (isset($_POST['ubsm'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $contact_email = mysqli_real_escape_string($db, $_POST['contact_email']);
    $s_contact_email = mysqli_real_escape_string($db, $_POST['s_contact_email']);
    $ncp = mysqli_real_escape_string($db, $_POST['ncp']);
    $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
    $ncm = mysqli_real_escape_string($db, $_POST['ncm']);
    $mobile_number = mysqli_real_escape_string($db, $_POST['mobile_number']);
    $ncf = mysqli_real_escape_string($db, $_POST['ncf']);
    $fax_number = mysqli_real_escape_string($db, $_POST['fax_number']);
    
    $query = "UPDATE basic_social_media SET ";
    $query .= "contact_email='$contact_email', ";
    $query .= "s_contact_email='$s_contact_email', ";
    $query .= "ncp='$ncp', ";
    $query .= "phone_number='$phone_number', ";
    $query .= "ncm='$ncm', ";
    $query .= "mobile_number='$mobile_number', ";
    $query .= "ncf='$ncf', ";
    $query .= "fax_number='$fax_number' ";
    $query .= "WHERE id='$id'";

    $queryrun = mysqli_query($db, $query);
    if ($queryrun) {
        header("location:".BASEURL."backend/?share&msg=updated");
    }
    else {
        header("location:".BASEURL."backend/?share&msg=error");
    }
};



