<?php


include_once 'config/init.php';

if (!isLoggedIn())
    header("Location: auth.php");
elseif (!isAdmin()) {
    alertPHPBack("You don't have the admin rights to access this page");
    //alertPHPBack($_SESSION['isAdmin']);
} else {

    $product = new Product();
    $template = new Template('templates/admin_dashboard.php');
    $template->category = isset($_GET['category']) ? $_GET['category'] : 'Products';
    $template->manager = $product;
    if ($template->category === 'Users') {
        $template->users = $template->manager->getAllUsers();
    } elseif ($template->category === 'Products') {
        $template->products = $template->manager->getAllProducts();
    } elseif($template->category === 'History'){
        $template->historys = $template->manager->getAllHistory();
    }

    echo $template;
}