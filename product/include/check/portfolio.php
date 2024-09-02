<?php
require '../init.php';


//Basic data Portfolio


if (isset($_POST['ubfrs'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $portfolio_title = mysqli_real_escape_string($db, $_POST['portfolio_title']);
    $portfolio_desc = mysqli_real_escape_string($db, $_POST['portfolio_desc']);
    
    
    $query = "UPDATE basic_frontend SET ";
    $query .= "portfolio_title='$portfolio_title', ";
    $query .= "portfolio_desc='$portfolio_desc' ";
    $query .= "WHERE id='$id'";    

    $queryrun = mysqli_query($db, $query);
    if ($queryrun) {
        header("location:".BASEURL."backend/?portfolio&msg=updated");
    }
    else {
        header("location:".BASEURL."backend/?portfolio&msg=error");
    }
};

//add Portfolio


if (isset($_POST['add_portfolio'])) {   
    $target_dir = "../../upload/portfolio/";
    $portfolio_img = $_FILES['portfolio_img']['name'];
    $portfolio_title = mysqli_real_escape_string($db, $_POST['portfolio_title']);
    $portfolio_desc = mysqli_real_escape_string($db, $_POST['portfolio_desc']);
    $portfolio_types = mysqli_real_escape_string($db, $_POST['portfolio_types']);
    $portfolio_url = mysqli_real_escape_string($db, $_POST['portfolio_url']);

    if (empty($portfolio_img) || empty($portfolio_title) || empty($portfolio_desc)) {
        header("location:".BASEURL."backend/?portfolio&msg=required");
        exit;
    }
    
    if (empty($portfolio_url)) {
        $portfolio_url = "#";
    } else {
        $portfolio_url = mysqli_real_escape_string($db, $portfolio_url);
    }
    
    $pportfolio_img = Upload('portfolio_img', $target_dir);
    if ($pportfolio_img == "error") {
        header("location:".BASEURL."backend/?portfolio&msg=errupload");
        exit;
    }
    
    $query = "INSERT INTO portfolio (portfolio_img, portfolio_title, portfolio_desc, portfolio_types, portfolio_url) VALUES ('$portfolio_img', '$portfolio_title', '$portfolio_desc', '$portfolio_types', '$portfolio_url')";
    $queryrun = mysqli_query($db, $query);
    
    if ($queryrun) {
        header("location:".BASEURL."backend/?portfolio&msg=addportfolio");
    } else {
        header("location:".BASEURL."backend/?portfolio&msg=erroradd");
    }
};

//delete Portfolio
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $sql = "DELETE FROM portfolio WHERE id='$id'";
    if ($db->query($sql) === TRUE) {
        header("location:".BASEURL."backend/?portfolio&msg=del");
    }
    else {
        header("location:".BASEURL."backend/?portfolio&msg=errordel");
    }
};



//edit Portfolio
if (isset($_POST['edit_portfolio'])) {   
    $id = $_POST['id'];
    $portfolio_title = mysqli_real_escape_string($db, $_POST['portfolio_title']);
    $portfolio_desc = mysqli_real_escape_string($db, $_POST['portfolio_desc']);
    $portfolio_types = mysqli_real_escape_string($db, $_POST['portfolio_types']);
    $portfolio_url = mysqli_real_escape_string($db, $_POST['portfolio_url']);

    if (empty($portfolio_title) || empty($portfolio_desc)) {
        header("location:".BASEURL."backend/?portfolio&msg=required");
        exit;
    }
    
    if (empty($portfolio_url)) {
        $portfolio_url = "#";
    } else {
        $portfolio_url = mysqli_real_escape_string($db, $portfolio_url);
    }
    
   
    
    $query = "UPDATE portfolio SET  portfolio_title = '$portfolio_title', portfolio_desc = '$portfolio_desc', portfolio_types = '$portfolio_types', portfolio_url = '$portfolio_url' WHERE id = $id";
    $queryrun = mysqli_query($db, $query);
    
    if ($queryrun) {
        header("location:".BASEURL."backend/?portfolio&msg=updated");
    } else {
        header("location:".BASEURL."backend/?portfolio&msg=error");
    }
};



