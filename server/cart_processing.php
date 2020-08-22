<?php

setcookie('card-list','', time() - 3600,'/');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$address = isset($_POST['address']) ? $_POST['address'] : null;
$city = isset($_POST['city']) ? $_POST['city'] : null;
$supplementary_info = isset($_POST['supplementary_info']) ? $_POST['supplementary_info'] : null;
$surname = isset($_POST['surname']) ? $_POST['surname'] : null;
$name = isset($_POST['name']) ? $_POST['name'] : null;
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : null;
$sum = isset($_POST['sum']) ? $_POST['sum'] : null;
$fields = isset($_POST['fields']) ? json_decode(htmlspecialchars_decode(($_POST['fields']))) : null;

if(!isset($_COOKIE['address_dest'])){
    setcookie("address_dest", $address, time() + (60*60*24*365),'/');
}
if(!isset($_COOKIE['city_dest'])){
    setcookie("city_dest", $city, time() + (60*60*24*365),'/');
}
if(!isset($_COOKIE['supplementary_info'])){
    setcookie("supplementary_info", $supplementary_info, time() + (60*60*24*365),'/');
}
if(!isset($_COOKIE['surname'])){
    setcookie("surname", $surname, time() + (60*60*24*365),'/');
}
if(!isset($_COOKIE['name'])){
    setcookie("name", $name, time() + (60*60*24*365),'/');
}
if(!isset($_COOKIE['mobile'])){
    setcookie("mobile", $mobile, time() + (60*60*24*365),'/');
}

require '../phpmail/PHPMailer/src/PHPMailer.php';
require '../phpmail/PHPMailer/src/Exception.php';
require '../phpmail/PHPMailer/src/SMTP.php';
require_once '../client/config/init.php';

$manager = new Product();
$msg_fields ='';
foreach ($fields as $key => $value){
    $msg_fields.='<h3><strong>'.$value.'</strong> x ' .$manager->getProduct($key)->NumeProdusRu.' + <u>'.(int)$value*(int)$manager->getProduct($key)->Pret.' MDL</u></h3>';
}
$final_name=$surname.' '.$name;
$manager->addToHistory($final_name,$address,$mobile,$sum,$msg_fields);

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
    $mail->setFrom('piligrim.cafe.aneni@gmail.com', 'Comanda noua');
} catch (\PHPMailer\PHPMailer\Exception $e) {
}

//Set an alternative reply-to address


//Set who the message is to be sent to
try {
    $mail->addAddress('piligrim.cafe.aneni@gmail.com', 'Comanda noua');
} catch (\PHPMailer\PHPMailer\Exception $e) {
}

//Set the subject line
$mail->Subject = 'comanda noua';

$mail->isHTML(true);
$mail->Body= $message = 'У вас новый заказ.<br> От <b>'
        .$name.' '.$surname.'</b> мобильный номер <b>'.$mobile.'</b> адресс: <b>'
            .$address.'</b> город/село <b>'. $city.'</b> доп. информация: '
        .' <b>'.$supplementary_info.'</b> <br>'
        .'Заказ:<br>'
        .$msg_fields
        .'На сумму:<b>'.$sum.'</b>'
        .'<br><br>'
        .'Отправленно при помощи PHPMAILER с сайта <b>piligrimcafe</b>';

//send the message, check for errors
try {
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';

    }
} catch (\PHPMailer\PHPMailer\Exception $e) {

}

header('Location: ../client/index.php?success=true');