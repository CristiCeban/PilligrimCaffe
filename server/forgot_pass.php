<?php
include_once '../client/config/init.php';
$email_used = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);

$user = new User();
if(!$user->checkEmail($email_used))
    header('Location: ../client/forgot_pass.php?alert_msg='.MAIL_NOT_FOUND);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../phpmail/PHPMailer/src/PHPMailer.php';
require '../phpmail/PHPMailer/src/Exception.php';
require '../phpmail/PHPMailer/src/SMTP.php';

$new_pass = generatePassword();
$user->changePassUtil($email_used,md5($new_pass));


$mail = new PHPMailer(true);


$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;



//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'piligrim.cafe.aneni@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'exotiquetouch101';

//Set who the message is to be sent from
try {
    $mail->setFrom('piligrim.cafe.aneni@gmail.com', 'Restore Pass');
} catch (\PHPMailer\PHPMailer\Exception $e) {
}

//Set an alternative reply-to address


//Set who the message is to be sent to
try {
    $mail->addAddress($email_used, 'Restore Pass');
} catch (\PHPMailer\PHPMailer\Exception $e) {
}

//Set the subject line
$mail->Subject = 'Restore Pass';

$mail->isHTML(true);
$mail->Body= $message = 'New Password for piligrim cafe is:'.$new_pass.'<br>'
    .'Sent from piligrimcafe.com';
//send the message, check for errors
try {
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';

    }
} catch (\PHPMailer\PHPMailer\Exception $e) {

}

header('Location: ../client/auth.php?alert_msg='.NEW_PASS_EMAIL);