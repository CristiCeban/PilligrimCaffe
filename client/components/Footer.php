<footer class="footer spad mt-2">
    <div class="container-fluid text-center text-md-left mx-0">
        <div class="row">
            <div class="col-lg-2  col-sm-6">
                <div class="footer__about__logo">
                        <a href="./index.php"><img src="images/logo_color.png" alt="" style="width: 180px"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__about">
                    <ul>
                        <li>
                            <?php if(check_lang_ru()):?>
                            Адрес: Ул. Кишинёвская, 68 Новые Анены, Молдова
                            <?php else:?>
                            Adresă: Str. Chișinăului, 68 Anenii Noi, Moldova
                            <?php endif;?>
                        </li>

                        <li>
                            <?php if(check_lang_ru()):?>
                            Телефон:
                            <?php else:?>
                            Telefon:
                            <?php endif;?>
                        </li>
                        <li>
                            <?php if(check_lang_ru()):?>
                            Почта:
                            <?php else:?>
                            Email:
                            <?php endif;?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-sm-6">
                <div class="footer__widget">
                    <h6>
                        <?php if(check_lang_ru()):?>
                        Полезные ссылки
                        <?php else:?>
                        Link-uri utile
                        <?php endif;?>
                    </h6>
                    <ul>
                        <li><a href="#">
                                <?php if(check_lang_ru()):?>
                                О нас
                                <?php else:?>
                                Despre Noi
                                <?php endif;?>
                            </a></li>
                        <li><a href="#">
                                <?php if(check_lang_ru()):?>
                                Про доставку
                                <?php else:?>
                                Despre Livrare
                                <?php endif;?>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer__widget">
                    <h6>
                        <?php if(check_lang_ru()):?>
                        График работы
                        <?php else:?>
                        Program de lucru
                        <?php endif;?>
                    </h6>
                    <ul>
                        <li><a href="#">
                                <?php if(check_lang_ru()):?>
                                Понедельник - Воскресенье: 24/7
                                <?php else:?>
                                Luni - Duminică: 24/7
                                <?php endif;?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

    </div>
</footer>


<!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/sidebar-accordion.js"></script>


    </body>
</html>