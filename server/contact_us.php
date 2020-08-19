<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$name = isset($_POST['name']) ? $_POST['name'] : null;
$mail_to_send = isset($_POST['mail']) ? $_POST['mail'] : null;
$msg = isset($_POST['msg']) ? $_POST['msg'] : null;


require '../phpmail/PHPMailer/src/PHPMailer.php';
require '../phpmail/PHPMailer/src/Exception.php';
require '../phpmail/PHPMailer/src/SMTP.php';
require_once '../client/config/init.php';

$manager = new Product();



$mail = new PHPMailer(true);


$mail->isSMTP();


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
    $mail->setFrom('piligrim.cafe.aneni@gmail.com', 'Contact');
} catch (\PHPMailer\PHPMailer\Exception $e) {
}

//Set an alternative reply-to address


//Set who the message is to be sent to
try {
    $mail->addAddress('piligrim.cafe.aneni@gmail.com', 'Contact');
} catch (\PHPMailer\PHPMailer\Exception $e) {
}

//Set the subject line
$mail->Subject = 'comanda noua';

$mail->isHTML(true);
$mail->Body= $message = 'Кто-то пытается с вами связаться'. '<br>'.
    'Имя:<b>'.$name.'</b> Майл:<b>'.$mail_to_send.'</b><br>'.
    'Сообщения:<b>'.$msg.'</b>';

//send the message, check for errors
try {
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';

    }
} catch (\PHPMailer\PHPMailer\Exception $e) {

}

header("Location: ../client/index.php?contact=success");
