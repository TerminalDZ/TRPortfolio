<?php
require '../init.php';

if(isset($_POST['theme01']) || isset($_POST['theme02'])){
    $id = $_POST['id'];
    if(isset($_POST['theme01'])){
        $theme = 'one';
    } else {
        $theme = 'two';
    }
    $query = "UPDATE basic_setup SET theme='$theme' WHERE id='$id'";

    if(mysqli_query($db, $query)) {
        header('location:'.BASEURL.'backend/?theme&msg=edit');
    } else {
        header('location:'.BASEURL.'backend/?theme&msg=error');
    }
}

?>
