<?php

include_once 'config/init.php';

$template = new Template('templates/order_processing.php');
$fields = [];
for($i = 0;$i< 10000;$i++){
    if(isset($_GET['id'.$i]))
        $fields[$i] = $_GET['id'.$i];
}
$template->fields = $fields;
$template->manager = new Product();
echo $template;
