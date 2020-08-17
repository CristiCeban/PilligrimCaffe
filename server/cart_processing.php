<?php

$address = isset($_POST['address']) ? $_POST['address'] : null;
$city = isset($_POST['city']) ? $_POST['city'] : null;
$supplementary_info = isset($_POST['supplementary_info']) ? $_POST['supplementary_info'] : null;
$surname = isset($_POST['surname']) ? $_POST['surname'] : null;
$name = isset($_POST['name']) ? $_POST['name'] : null;
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : null;



//$to = 'lungukirillpiligrim@gmail.com';
//$subject = 'Заказ';
//$message = 'У вас новый заказ.\n'
//            .$name.' '.$surname.' '.$mobile.'\n'
//            .$address.' '. $city;
//$headers = array(
//    'From' => 'lungukirillpiligrim@gmail.com',
//    'Reply-To' => 'lungukirillpiligrim@gmail.com',
//    'X-Mailer' => 'PHP/' . phpversion()
//);
//
//mail($to, $subject, $message, $headers);
//
//echo 'sa primit';

$to_email = "lungukirillpiligrim@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: sender\'s email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}