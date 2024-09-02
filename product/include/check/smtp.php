<?php
require '../init.php';
if(isset($_POST['usmtp'])){
    $id = $_POST['id'];
    $host = $_POST['host'];
    $port = $_POST['port'];
    $usernamesmtp = $_POST['usernamesmtp'];
    $passwordsmtp = $_POST['passwordsmtp'];
    $setfrom = $_POST['setfrom'];
    $smtpauth = $_POST['smtpauth'];
    $smtpsecure = $_POST['smtpsecure'];

    $query = "UPDATE smtp SET host='$host', port='$port', usernamesmtp='$usernamesmtp', passwordsmtp='$passwordsmtp', setfrom='$setfrom', smtpauth='$smtpauth', smtpsecure='$smtpsecure' WHERE id='$id'";

    if(mysqli_query($db, $query)) {
        header('location:'.BASEURL.'backend/?editsmtp&msg=edit');
    } else {
        header('location:'.BASEURL.'backend/?editsmtp&msg=error');
    }
}


if(isset($_POST['sendsmtp'])){
    $email = $_POST['setfrom'];

    $mail->addAddress($email);
    $mail->Subject = 'test email';
    
    $mail->Body = 'This is a test email sent using the SMTP settings from the database.';

    if(!$mail->send()) {
       
        header('location:'.BASEURL.'backend/?editsmtp&msg=errsend');

    } else {
        header('location:'.BASEURL.'backend/?editsmtp&msg=send');
    }
}
?>