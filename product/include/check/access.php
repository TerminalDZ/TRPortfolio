

<?php
require '../init.php';
//login
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, md5($_POST['password']));
    $remember = isset($_POST['remember']) ? true : false;

    $query = "SELECT * FROM admin_users WHERE email='$email' AND password='$password'";
    $run = mysqli_query($db, $query);
    $result = mysqli_fetch_array($run);

    if ($result) {
        if($result['user_access'] == 1) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            if($remember) {
                setcookie('username', $result['username'], time() + 86400);
                setcookie('password', $result['password'], time() + 86400);
            }
            header('location:'.BASEURL.'backend/');
            $mail->addAddress($email);
            $mail->Subject = 'Your account is logged in.';
            $mail->Body = '<body style=" direction: ltr;">
            <h3>Your account is already logged in  ip : '.$_SERVER['REMOTE_ADDR'].'</h3>
            <h4>If you are not logged in, <a href="'.BASEURL.'backend/login/" > change your password </a></h4>
            </body>
            ';
            $mail->send();
        } else {
            header('location:'.BASEURL.'backend/login/index.php?msg=banned');
        }
    } else {
        header('location:'.BASEURL.'backend/login/index.php?msg=iuser');
    }

};
//*login



//logout
if (isset($_POST['logout'])) {
    unset($_SESSION["username"]);
    unset($_SESSION["id"]);
    header("Location:".BASEURL."backend/login/index.php?msg=logout");
};
//*logout



//send password


if(isset($_POST['resetpass'])) {
    $email = $_POST['email'];

    // Validate the email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location:'.BASEURL.'backend/login/index.php?recopw=true&msg=noacount');
    } else {
        // Check if the email address exists in the database
        $query = "SELECT id FROM admin_users WHERE email = '$email'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result) == 0) {
            header('location:'.BASEURL.'backend/login/index.php?recopw=true&msg=noacount');
        } else {
            // Generate a random token
            $token = bin2hex(random_bytes(32));
            $expiry_time = time() + 30*60; // 15 minutes from now

            // Store the token and expiry time in the database
            $update_query = "UPDATE admin_users SET token='$token', token_expiry='$expiry_time' WHERE email='$email'";
            if(mysqli_query($db, $update_query)) {                
                $mail->Subject = 'Password Reset';
                $mail->Body = '
                                        <h3>Welcome :'.$email.'</h3>
                                        <h4>You recently requested to reset your password: <a href="'.BASEURL.'backend/login/index.php?paspw&token='.$token.'&msg=sccpass"><strong>Password Reset</strong></a></h4>
                                        <h5>If the password reset request was not requested by you, please ignore this message. This link will be destroyed after 30 minutes</h5>
                                                                                         ';
                $mail->AddAddress($email);
                if($mail->Send()) {
                    header('location:'.BASEURL.'backend/login/index.php?recopw=true&msg=sending');
                } else {
                    header('location:'.BASEURL.'backend/login/index.php?recopw=true&msg=err1');
                }
            } else {
                header('location:'.BASEURL.'backend/login/index.php?recopw=true&msg=err2');
            }
        }
    }
    };


    //rest pass

    if(isset($_POST['restpassword'])) {
        if(isset($_POST['token']) && isset($_POST['new_password']) && isset($_POST['exnew_password'])) {
            $token = $_POST['token'];
            $new_password = $_POST['new_password'];
            $exnew_password = $_POST['exnew_password'];
        
            if($new_password != $exnew_password) {
                header('location:'.BASEURL.'backend/login/index.php?paspw&token='.$token.'&msg=exe');
            } else {
                // Check if the token exists and if it's not expired
                $query = "SELECT id, token_expiry FROM admin_users WHERE token = '$token'";
                $result = mysqli_query($db, $query);
                if(mysqli_num_rows($result) == 0) {
                    header('location:'.BASEURL.'backend/login/index.php?paspw&token='.$token.'&msg=endtime');
                } else {
                    $row = mysqli_fetch_array($result);
                    $email = $row['id'];
                    $expiry_time = $row['token_expiry'];
                    if(time() > $expiry_time) {
                        header('location:'.BASEURL.'backend/login/index.php?paspw&token='.$token.'&msg=endtime');
                    } else {
                        // Update the password
                        $new_password = md5($new_password);
                        $update_query = "UPDATE admin_users SET password='$new_password', token=NULL, token_expiry=NULL WHERE id='$email'";
                        if(mysqli_query($db, $update_query)) {
                            header('location:'.BASEURL.'backend/login/?msg=sccpass');
                        } else {
                            header('location:'.BASEURL.'backend/login/index.php?paspw&msg=err3');
                        }
                    }
                }
            }
        } else {
            header('location:'.BASEURL.'backend/login/index.php?paspw&token='.$token.'');
        }

    };

