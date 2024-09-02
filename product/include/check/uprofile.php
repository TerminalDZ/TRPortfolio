<?php
require '../init.php';

if (isset($_POST['uprofile'])) {
    $id = $_POST['id']; // added this line to get the id from the form
    $name = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']); // added this line to get the new password from the form
    $repassword = mysqli_real_escape_string($db, $_POST['repassword']); // added this line to get the repassword from the form
    $ex_pass = mysqli_real_escape_string($db, $_POST['ex_pass']); // added this line to get the current password from the form

    // added password validation
    if (!empty($password) && $password !== $repassword) { // check if password is not empty and also check if it matches repassword
        header("location:".BASEURL."backend/?myacount&msg=passwordnomath");
    } else {
        $query = "SELECT * FROM admin_users WHERE id='$id'";
        $query_run = mysqli_query($db, $query);
        $user = mysqli_fetch_assoc($query_run);
        $hashed_password = $user['password'];
        if (md5($ex_pass) !== $hashed_password) { // Verify the current password
            header("location:".BASEURL."backend/?myacount&msg=errpassword");
        } else {
            if (!empty($password)) { // check if new password is not empty
                $password = md5($password); // hash the new password before saving it to the database
                $query = "UPDATE admin_users SET ";
                $query .= "username='$name',";
                $query .= "email='$email',";
                $query .= "password='$password' WHERE id='$id'";
            } else {

                $query = "UPDATE admin_users SET ";
                $query .= "username='$name',";
                $query .= "email='$email' WHERE id='$id'";
            }
            echo $query;

            $queryrun = mysqli_query($db, $query);
            if ($queryrun) {
                $_SESSION['username'] = $name;
                header("location:".BASEURL."backend/?myacount&msg=update");
            } else {
                header("location:".BASEURL."backend/?myacount&msg=error");
            }
        }
    }

}
?>