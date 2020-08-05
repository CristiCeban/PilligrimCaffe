<?php
include_once '../client/config/init.php';
$manager = new Product();
$category = "";
if(isset($_GET['idUtilizator'])) {
    $manager->deleteUser($_GET['idUtilizator']);
    $category='?category=Users';
}
elseif(isset($_GET['idProdus'])) {
    $manager->deleteProduct($_GET['idProdus']);
    $category='?category=Products';
}
header('Location: ../client/admin_dashboard.php'.$category);