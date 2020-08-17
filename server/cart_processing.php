<?php

$address = isset($_POST['address']) ? $_POST['address'] : null;
$city = isset($_POST['city']) ? $_POST['city'] : null;
$supplementary_info = isset($_POST['supplementary_info']) ? $_POST['supplementary_info'] : null;
$surname = isset($_POST['surname']) ? $_POST['surname'] : null;
$name = isset($_POST['name']) ? $_POST['name'] : null;
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : null;

echo 'adress: '. $address . ' city:' . $city . ' supinfo' . $supplementary_info.'name: '. $name . ' surname:' . $surname
    . ' mobile' . $mobile;