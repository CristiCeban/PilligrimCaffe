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
    $template->category = isset($_GET['category']) ? $_GET['category'] : 'Users';
    $template->manager = $product;
    if ($template->category === 'Users') {
        $template->users = $template->manager->getAllUsers();
        }
//    } elseif ($template->category === 'Teachers') {
//        $template->teachers = $manager->getAllTeachers();
//    } elseif ($template->category === 'Modules') {
//        $template->modules = $manager->getAllModules();
//    } elseif ($template->category === 'Groups') {
//        $template->groups = $manager->getAllGroups();
//    } elseif ($template->category === 'Gtypes') {
//        $template->gtypes = $manager->getAllGtypes();
//    } elseif ($template->category === 'Assigments') {
//        $template->affectations = $manager->getAllAffectations();
//    }
    echo $template;
}