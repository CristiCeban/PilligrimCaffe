<?php
include_once '../client/config/init.php';
$manager = new Product();
if(isset($_POST['btn_add_user'])){
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $mdp = filter_var(trim($_POST['mdp']),FILTER_SANITIZE_STRING);
    $role = filter_var(trim($_POST['role']),FILTER_SANITIZE_STRING);
    $manager->addUser($login,$mdp,$role);
}
elseif(isset($_POST['btn_add_product'])){
    $name = filter_var(trim($_POST['NumeProdus']),FILTER_SANITIZE_STRING);
    $price = filter_var(trim($_POST['Pret']),FILTER_SANITIZE_STRING);
    $imagePath = filter_var(trim($_POST['ImagePath']),FILTER_SANITIZE_STRING);
    $category = filter_var(trim($_POST['category']),FILTER_SANITIZE_STRING);
    echo "name = " . $name . " ; price = " . $price . " ;imagePath = " .$imagePath .
    "category = " . $category;

}

#echo "<script>window.close();</script>";
?>


