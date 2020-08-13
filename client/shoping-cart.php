<?php

include_once 'config/init.php';

$template = new Template('templates/shoping-cart.php');
$template->manager = new Product();
echo $template;