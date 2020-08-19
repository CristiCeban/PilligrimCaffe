<?php

include_once 'config/init.php';

$template = new Template('templates/index.php');
$template->success = isset($_GET['success']) ? $_GET['success'] : null;
echo $template;

/*
 * -bauturi calde
 * -brutarie
 *  ***B/A alcoolul ***
 *      -cafea rece
 *      -apa
 *      -sucuri
 *      -energizante
 * ***Bauturi alcoolice***
 *      -vin
 *      -coniac
 *      -vodeara
 *      -wiski
 *      -bere
 * ***Produse Alimentare***
 *      -Snack-uri
 *      -Zakuska la bere
 *      -oreshki aparte
 *      - dulciuri
 * Tigari sub semnul intrebarii ???
 */