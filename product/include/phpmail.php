<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require  'vendor/phpmailer/src/PHPMailer.php';
require  'vendor/phpmailer/src/SMTP.php';
require  'vendor/phpmailer/src/Exception.php';


                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = $smtpdata['host'];
                $mail->SMTPAuth = $smtpdata['smtpauth'];
                $mail->Username = $smtpdata['usernamesmtp'];
                $mail->Password = $smtpdata['passwordsmtp'];
                $mail->SMTPSecure = $smtpdata['smtpsecure'];
                $mail->Port = $smtpdata['port'];
                $mail->setFrom($smtpdata['usernamesmtp'], $smtpdata['setfrom']);
                $mail->isHTML(true);
                $mail->CharSet = 'UTF-8';

                ?>