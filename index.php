<?php

include_once 'config/init.php';
//TODO Refactor isAdmin on sessions,not on cookie.
$template = new Template('templates/index.php');

echo $template;