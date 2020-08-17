<?php
include_once '../client/config/init.php';
$search = $_POST['search'];
$denumirea= new Product();
$search_result=$denumirea->getProductsByStr($search);
?>