<?php

include_once 'config/init.php';


$template = new Template('templates/shop_grid.php');
$template->categorie = isset($_GET['cat']) ? $_GET['cat'] : null;
$template->manager = new Product();
$template->result_set = $template->manager->getProductbyCategory($template->categorie);
echo $template;