<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="js/functions.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <title>Piligrim Cafe</title>
    <!-- Google Font -->
    <link type="text/javascript"  href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Sidebar Accordion CSS -->
	<link rel="stylesheet" href="css/sidebar-accordion.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="css/demo.css">

    <!-- ALERTIFY -->
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <!--
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>

</head>

<body>
<!-- Page Preloder -->
<!--<div id="preloder">-->
<!--    <div class="loader"></div>-->
<!--</div>-->

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="images/logo_color.png" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <?php if(check_lang_ru()):?>
            <img src="images/russia.png" alt="">
            <div>Русский</div>
            <?php else: ?>
            <img src="images/moldova.png" alt="">
            <div>Română</div>
            <?php endif?>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="." onclick="setCookie('language','ru',1)">Русский</a></li>
                <li><a href="." onclick="setCookie('language','ro',1)">Română</a></li>
            </ul>
        </div>
        <?php if(isAdmin()): ?>
            <div class="header__top__right__auth">
                <a href="admin_dashboard.php"><i class="fa fa-user"></i>DashBoard</a>
            </div>
        <?php endif ?>
        <?php
        if(isLoggedIn()):
            ?>
            <div class="header__top__right__auth">
                <a href="../server/disc.php"><i class="fa fa-user"></i>
                    <?php if(check_lang_ru()):?>
                        Выйти
                    <?php else:?>
                        Ieși
                    <?php endif;?>
                </a>
            </div>
        <?php
        else:
            ?>
            <div class="header__top__right__auth">
                <a href="auth.php"><i class="fa fa-user"></i>
                    <?php if(check_lang_ru()):?>
                        Вход
                    <?php else:?>
                        Intră în cont
                    <?php endif;?></a>
            </div>
            <div class="header__top__right__auth">
                <a href="new_user.php"><i class="fa fa-user"></i>
                    <?php if(check_lang_ru()):?>
                        Регистрация
                    <?php else:?>
                        Înregistrează-te
                    <?php endif;?>
                    </a>
            </div>
        <?php endif;?>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
                <ul class="header__menu__dropdown">
                    <li><a href="shoping-cart.php">
                            <?php if(check_lang_ru()):?>
                                Корзина
                            <?php else:?>
                                Coș de cumpărături
                            <?php endif;?>
                            </a></li>
                </ul>
            </li>
            <li><a href="contact.php">
                    <?php if(check_lang_ru()):?>
                        Контакты
                    <?php else:?>
                        Contacte
                    <?php endif;?></a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="humberger__menu__contact">
    </div>
</div>
<!-- Humberger End -->







<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">

                        <div class="header__top__right__language">
                            <?php if(check_lang_ru()):?>
                                <img src="images/russia.png" alt="">
                                <div>Русский</div>
                            <?php else: ?>
                                <img src="images/moldova.png" alt="">
                                <div>Română</div>
                            <?php endif?>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li ><a href="." onclick="setCookie('language','ru',1)" >Русский</a></li>
                                <li><a href="." onclick="setCookie('language','ro',1)">Română</a></li>
                            </ul>
                        </div>
                        <?php if(isAdmin()): ?>
                            <div class="header__top__right__auth">
                                <a href="admin_dashboard.php"><i class="fa fa-user"></i>DashBoard</a>
                            </div>
                        <?php endif ?>
                        <?php
                            if(isLoggedIn()):
                        ?>
                        <div class="header__top__right__auth">
                            <a href="../server/disc.php"><i class="fa fa-user"></i>
                                <?php if(check_lang_ru()):?>
                                    Выйти
                                <?php else:?>
                                    Ieși
                                <?php endif;?>
                            </a>
                        </div>
                        <?php
                            else:
                                ?>
                        <div class="header__top__right__auth">
                            <a href="auth.php"><i class="fa fa-user"></i>
                                <?php if(check_lang_ru()):?>
                                    Вход
                                <?php else:?>
                                    Intră în cont
                                <?php endif;?>
                                </a>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="new_user.php"><i class="fa fa-user"></i>
                                <?php if(check_lang_ru()):?>
                                    Регистрация
                                <?php else:?>
                                    Înregistrează-te
                                <?php endif;?>
                                </a>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="hero">
                    <div class="row mt-4 mr-0">
                        <div class="header__logo  col-lg-2 " >
                            <a href="./index.php">
                                <img src="images/logo_color.png" alt="" style=" width: 190px;">
                            </a>
                        </div>

