<?php

include_once 'config/init.php';

$template = new Template('templates/index.php');
$template->manager = new Product();
$template->success = isset($_GET['success']) ? $_GET['success'] : null;
echo $template;

//pass 000webhost
//OJoN$mH^@@4c!XfIk8D8
//db
//l!sx~-_)d\baS7is
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