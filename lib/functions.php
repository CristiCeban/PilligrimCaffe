<?php
function isLoggedIn()
{
    if (isset($_COOKIE['username'])) {
        return true;
    }else{
        return false;
    }
}

function deleteCookie(string $key) {
    if (isset($_COOKIE[$key])) {
        unset($_COOKIE[$key]);
        setcookie($key, '', time() - 3600, '/');
    }
}

function alertPHP(string $msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

function alertPHPBack(string $msg){
    echo '<script type="text/javascript">alert("' . $msg .'");window.location.href="index.php";
    </script>';
}

function isAdmin(){
    if (isset($_COOKIE['isAdmin']) && $_COOKIE['isAdmin']==IS_ADMIN) {
        return true;
    }
    return false;
}

function alertLogin($alert_msg)
{
    if (isset($alert_msg)) {
        $msg = '';
        if ($alert_msg == USER_NOT_FOUND) {
            $msg = "User with this username doesn't exist";
        } elseif ($alert_msg == PASSWORD_WRONG) {
            $msg = "Wrong password";
        }
        alertPHP($msg);
    }
}

function alertChangedPass($alert_msg){
    if (isset($alert_msg)) {
        if ($alert_msg == USER_NOT_FOUND) {
            $msg = "User with this username doesn't exist";
        } elseif ($alert_msg == PASSWORD_WRONG) {
            $msg = "Wrong password";
        }
        elseif ($alert_msg == PASSWORD_NOT_MATCH){
            $msg = "passwords doesn't match.";
        }
        else $msg ="Password was successfully changed";
        alertPHP($msg);
    }
}

function rus_to_ro_cat($category){
    switch($category) {
        case "Горячие Напитки":
            return "bauturi calde";
        case "Выпечка" :
            return "Brutarie";
        case "Б/А напитки:Холодный Коффе":
            return "cafea rece";
        case "Б/А напитки:Вода":
            return "apa";
        case "Б/А напитки:Сок":
            return "sucuri";
        case "Б/А напитки:Энергетик":
            return "energizante";
        case "Алкоол. напитки:Вино":
            return "vin";
        case "Алкоол. напитки:Коньяк":
            return "coniac";
        case "Алкоол. напитки:Водка":
            return "vodka";
        case "Алкоол. напитки:Виски":
            return "wiski";
        case "Алкоол. напитки:Пиво":
            return "bere";
        case "Продукты:Снэки":
            return "Snack-uri";
        case "Продукты:Закуска к пиву":
            return "Zakuska la bere";
        case "Продукты:Орешки":
            return "arahide";
        case "Продукты:Сладости":
            return "dulciuri";
        case "Сигареты":
            return "tigari";
        default:
            return null;
    }
}

function ro_to_rus_cat($category){
    switch ($category) {
        case "bauturi calde":
            return "Горячие Напитки";
        case "Brutarie" :
            return "Выпечка";
        case "cafea rece":
            return "Б/А напитки:Холодный Коффе";
        case "apa":
            return "Б/А напитки:Вода";
        case "sucuri":
            return "Б/А напитки:Сок";
        case "energizante":
            return "Б/А напитки:Энергетик";
        case "vin":
            return "Алкоол. напитки:Вино";
        case "coniac":
            return "Алкоол. напитки:Коньяк";
        case "vodka":
            return "Алкоол. напитки:Водка";
        case "wiski":
            return "Алкоол. напитки:Виски";
        case "bere":
            return "Алкоол. напитки:Пиво";
        case "Snack-uri":
            return "Продукты:Снэки";
        case "Zakuska la bere":
            return "Продукты:Закуска к пиву";
        case "arahide":
            return "Продукты:Орешки";
        case "dulciuri":
            return "Продукты:Сладости";
        case "tigari":
            return "Сигареты";


        default:
            return null;
    }
}