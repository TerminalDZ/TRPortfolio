<?php

require '../init.php';

//send message
if (isset($_POST['sendcontact'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $subject = mysqli_real_escape_string($db, $_POST['subject']);
        $message = mysqli_real_escape_string($db, $_POST['message']);

        // check if cookie exists and get the data
        $cookie_name = "contact_message";
        if(isset($_COOKIE[$cookie_name])) {
            $cookie_data = json_decode($_COOKIE[$cookie_name], true);
            $sent_times = $cookie_data['sent_times'];
            $last_sent_time = end($sent_times);
        } else {
            $sent_times = array();
            $last_sent_time = null;
        }

        // check if the user has sent more than 2 messages in the last 30 minutes
        $current_time = time();
        if(count($sent_times) < 2 || ($current_time - $last_sent_time) > 1800) {
            // save the new message and update the cookie
            $sql = "INSERT INTO contact (name, email, subject, message, sent_time) VALUES ('$name', '$email', '$subject', '$message', NOW())";
            if(mysqli_query($db, $sql)) {
                // update the cookie
                array_push($sent_times, $current_time);
                if(count($sent_times) > 2) {
                    array_shift($sent_times);
                }
                $cookie_data = array('sent_times' => $sent_times);
                setcookie($cookie_name, json_encode($cookie_data), $current_time + 1800, "/");
                echo "OK";
                $emailSned = $bsmdata['contact_email'] ? $bsmdata['s_contact_email'] : 'boukemoucheidriss@gmail.com';

                $mail->addAddress($email);
                $mail->Subject = 'Your message has been sent';
                $mail->Body = '<body style=" direction: ltr;">
                <h3>Your message has been sent successfully</h3>
                <h4>Thank you for contacting us, we will get back to you as soon as possible</h4>
                </body>
                ';
                $mail->send();

                $mail->addAddress($emailSned);
                $mail->Subject = 'New message from the website';
                $mail->Body = '<body style=" direction: ltr;">
                <h3>New message from the website</h3><br>
                <h4>Name: '.$name.'</h4><br>   
                <h4>Email: '.$email.'</h4><br>
                <h4>Subject: '.$subject.'</h4><br>
                <h4>Message: '.$message.'</h4><br>
                </body>
                ';
                $mail->send();


            } else {
                echo "There was an error sending a message, please try again later";
            }
        } else {
            echo "You cannot send more than 2 messages in half an hour";
        }
    }
};

//Basic data Contact


if (isset($_POST['ubfrc'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $contact_title = mysqli_real_escape_string($db, $_POST['contact_title']);
    $contact_desc = mysqli_real_escape_string($db, $_POST['contact_desc']);
    
    
    $query = "UPDATE basic_frontend SET ";
    $query .= "contact_title='$contact_title', ";
    $query .= "contact_desc='$contact_desc' ";
    $query .= "WHERE id='$id'";    

    $queryrun = mysqli_query($db, $query);
    if ($queryrun) {
        header("location:".BASEURL."backend/?contact&msg=updated");
    }
    else {
        header("location:".BASEURL."backend/?contact&msg=error");
    }
};


//delete Communication messages


if (isset($_POST['delet'])) {
    $message_ids = isset($_POST['message_ids']) ? $_POST['message_ids'] : array();
    if (count($message_ids) > 0) {
        $formatted_message_ids = implode(',', $message_ids);
        $sql = "DELETE FROM contact WHERE id IN ($formatted_message_ids)";
        if (mysqli_query($db, $sql)) {
            header("Location: " . BASEURL . "backend/?contact&msg=delet");
            exit();
        } else {
            header("Location: " . BASEURL . "backend/?contact&msg=deleterr");
            exit();
        }
    }
}



