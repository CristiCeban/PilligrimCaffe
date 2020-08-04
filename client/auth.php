<?php

include_once 'config/init.php';

$template = new Template('templates/auth.php');

$alert_msg = isset($_GET['alert_msg']) ? $_GET['alert_msg'] : null;
$user = isset($_GET['username']) ? $_GET['username'] : null;
if($alert_msg) {
    $template->alert_msg = $alert_msg;
}
if($user)
    $template->user = $user;
echo $template;