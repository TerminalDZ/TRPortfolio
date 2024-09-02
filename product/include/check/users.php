<?php
require '../init.php';
//add user
if (isset($_POST['adduser'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rep_password = $_POST['rep_password'];
    $user_access = $_POST['user_access'];
    
    if ($password != $rep_password) {
        header("location:".BASEURL."backend/?editusers&msg=passwordnomach");
        exit();
    }

    $check_email = "SELECT * FROM admin_users WHERE email = '$email'";
    $result = $db->query($check_email);
    
    if ($result->num_rows > 0) {
        header("location:".BASEURL."backend/?editusers&msg=emailexist");
        exit();
    }
    
    $password_hash = md5($password);
    $sql = "INSERT INTO admin_users (username, email, password, user_access)
    VALUES ('$username', '$email', '$password_hash', '$user_access')";
    
    if ($db->query($sql) === TRUE) {
        header("location:".BASEURL."backend/?editusers&msg=secsadd");    
        $mail->addAddress($email);
        $mail->Subject = 'You are already registered. You can log in.';
        $mail->Body = '<body>
        <h1>You can access the site via the link: <a href="'.BASEURL.'backend/" style="direction: ltr;">'.BASEURL.' </a></h1>
        <h2>Login Data</h2>
        <h3>Email: <strong style="direction: ltr;">'.$email.'</strong></h3>
        <h3>Password: <strong style="direction: ltr;">'.$password.'</strong></h3>
        <h3>Account status: <strong>';
        if($user_access == 1){
            $mail->Body .= 'Active';
        }elseif($user_access == 0){
            $mail->Body .= 'Restricted please contact us';
        }
        $mail->Body .= '</strong></h3>
        </body>';
        $mail->send();
    } else {
        header("location:".BASEURL."backend/?editusers&msg=error");
    }
};

//edit user

if (isset($_POST['edituser'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rep_password = $_POST['rep_password'];
    $user_access = $_POST['user_access'];
    $user_access_old=$_POST['user_access_old'];
    if($password != $rep_password) {
    header("location:".BASEURL."backend/?editusers&msg=passwordnomach");
    exit();
    }

    if (empty($password)) {
        $sql = "UPDATE admin_users SET username='$username', email='$email', user_access='$user_access' WHERE id='$id'";
    } else {
        $password_hash = md5($password);
        $sql = "UPDATE admin_users SET username='$username', email='$email', password='$password_hash', user_access='$user_access' WHERE id='$id'";
        }if ($db->query($sql) === TRUE) {
            if($user_access == 1){
                $mail->addAddress($email);
                $mail->Subject = 'Your account has been activated';
                $mail->Body = '<body>
                <h1>Congratulations!</h1>
                <h2>Your account has been activated. You can now log into the <a href="'.BASEURL.'backend/">website</a>
                </body>
                ';
            }elseif($user_access == 0){
                $mail->addAddress($email);
                 $mail->Subject = 'Your account has been banned';
                 $mail->Body = '<body>
                 <h1>Please contact us</h1>
                 <h2>Your account has been banned from our site
                 </body>
                 ';
            }
        
            if($user_access != $user_access_old){
                if(!$mail->send()) {
                    header("location:".BASEURL."backend/?editusers&msg=errsend");
                } else {
                    header("location:".BASEURL."backend/?editusers&msg=editusr");
                }
            }else{
                header("location:".BASEURL."backend/?editusers&msg=editusr");
            }
        } else {
            header("location:".BASEURL."backend/?editusers&msg=error");
        }
    } ;

//delet user
if (isset($_POST['delet'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM admin_users WHERE id='$id'";
    $run = mysqli_query($db, $query);
    if ($run) {
        header("location:".BASEURL."backend/?editusers&msg=delet");
    }
    else {
        header("location:".BASEURL."backend/?editusers&msg=error");
    }
};

//send email


if(isset($_POST['sendusermail'])){
    $id = $_POST['id'];
    $sendpass = $_POST['sedpasswor'];
    $password = md5($sendpass);
    $queryus = "SELECT * FROM admin_users WHERE id = '$id' AND password = '$password'";
    $resultus = mysqli_query($db, $queryus);
    if(mysqli_num_rows($resultus) > 0){
        $datasmtpus = mysqli_fetch_array($resultus);
        $mail->addAddress($datasmtpus['email']);
        $mail->Subject = 'You may be logged in';
                $mail->Body = '<body>
        <h1>You can login to the site entry link:<a href="'.BASEURL.'backend/">'.BASEURL.' </a></h1> 
        <h2>Registration data</h2>
        <h3>Email: <strong>'.$datasmtpus['email'].'</strong></h3>
        <h3>Password: <strong>'.$sendpass.'</strong></h3>
        <h3>Account status: <strong>';
if($datasmtpus['user_access'] == 1){
    $mail->Body .= 'Active';
}elseif($datasmtpus['user_access'] == 0){
    $mail->Body .= 'Restricted please contact us';
}
$mail->Body .= '</strong></h3>

</body>';

        if(!$mail->send()) {
           
            header("location:".BASEURL."backend/?editusers&msg=errsend");

        } else {
            header('location:'.BASEURL.'backend/?editusers&msg=send');
        }
    }else{
        header('location:'.BASEURL.'backend/?editusers&msg=errpass');
    }
} ;