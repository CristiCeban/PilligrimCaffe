<?php
include_once '../client/config/init.php';
$manager = new Product();
if(isset($_POST['btn_edit_product'])){
    $numeProdus = filter_var(trim($_POST['numeProdus']),FILTER_SANITIZE_STRING);
    $numeProdusRu = filter_var(trim($_POST['numeProdusRu']),FILTER_SANITIZE_STRING);
    $pret = filter_var(trim($_POST['pret']),FILTER_SANITIZE_STRING);
    $category = rus_to_ro_cat(filter_var(trim($_POST['category']),FILTER_SANITIZE_STRING));
    $imagePath = filter_var(trim($_POST['imagePath']),FILTER_SANITIZE_STRING);
    $id = $_GET['idProdus'];
    $manager->updateProduct($id,$numeProdus,$numeProdusRu,$pret,$imagePath,$category);
}