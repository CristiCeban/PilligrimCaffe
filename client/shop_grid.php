<?php

include_once 'config/init.php';


$template = new Template('templates/shop_grid.php');
$template->search = isset($_POST['search']) ? $_POST['search'] : null;
$template->categorie = isset($_GET['cat']) ? $_GET['cat'] : null;
$template->manager = new Product();
echo $template;