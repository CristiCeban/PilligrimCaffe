<?php

include_once 'config/init.php';

$manager = new Product();

$template = new Template('templates/shop_grid.php');
$template->categorie = "";
if(isset($_GET['bc']))
    $template->categorie = 'bc';
if(isset($_GET['br']))
    $template->categorie = 'br';
if(isset($_GET['']))
    $template->categorie = 'bauturi_calde';

echo $template;