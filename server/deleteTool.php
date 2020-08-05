<?php
include_once '../client/config/init.php';
$manager = new Product();
$category = "";
if(isset($_GET['idUtilizator'])) {
    $manager->deleteUser($_GET['idUtilizator']);
    $category='?category=Users';
}
elseif(isset($_GET['eid'])) {
    $manager->deleteTeacher($_GET['eid']);
    $category='?category=Teachers';
}
elseif(isset($_GET['mid'])) {
    $manager->deleteModule($_GET['mid']);
    $category='?category=Modules';
}
elseif(isset($_GET['gid'])) {
    $manager->deleteGroup($_GET['gid']);
    $category = '?category=Groups';
}
elseif(isset($_GET['gtid'])) {
    $manager->deleteGtype($_GET['gtid']);
    $category = '?category=Gtypes';
}
header('Location: ../client/admin_dashboard.php'.$category);