<?php

include_once 'config/init.php';

$template = new Template('templates/forgot_pass.php');
$template->alert_msg = isset($_GET['alert_msg']) ? $_GET['alert_msg'] : null;
echo $template;