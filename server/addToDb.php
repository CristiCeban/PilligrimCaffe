<?php
include_once '../client/config/init.php';
$manager = new Product();
if(isset($_POST['btn_add_user'])){
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $mdp = filter_var(trim($_POST['mdp']),FILTER_SANITIZE_STRING);
    $role = filter_var(trim($_POST['role']),FILTER_SANITIZE_STRING);
    $manager->addUser($login,$mdp,$role);
}

echo "<script>window.close();</script>";
?>


