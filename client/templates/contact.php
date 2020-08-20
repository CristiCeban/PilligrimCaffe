<?php
require "../components/Header.php";
require "../components/middle.php";
require "../components/end.php";
?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->


    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>
                            <?php if(check_lang_ru()):?>
                            Телефон
                            <?php else:?>
                            Telefon
                            <?php endif;?>
                        </h4>
                        <p>+01-3-8888-6868</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>
                            <?php if(check_lang_ru()):?>
                            Адрес
                            <?php else:?>
                            Adresă
                            <?php endif;?>
                        </h4>
                        <p>
                            <?php if(check_lang_ru()):?>
                                Адрес: Ул. Кишинёвская, 68 Новые Анены, Молдова
                            <?php else:?>
                                Adresă: Str. Chișinăului, 68 Anenii Noi, Moldova
                            <?php endif;?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>
                            <?php if(check_lang_ru()):?>
                            Открыто
                            <?php else:?>
                            Deschis
                            <?php endif;?>
                        </h4>
                        <p>
                            <?php if(check_lang_ru()):?>
                                Понедельник - Воскресенье: 24/7
                            <?php else:?>
                                Luni - Duminică: 24/7
                            <?php endif;?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>
                            <?php if(check_lang_ru()):?>
                            Почта
                            <?php else:?>
                            Email
                            <?php endif;?>
                        </h4>
                        <p>hello@colorlib.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->

<div class="map">
    <iframe
            src="https://maps.google.com/maps?q=lukoil%20anenii%20noi&t=&z=15&ie=UTF8&iwloc=&output=embed"
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>

    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>
                            <?php if(check_lang_ru()):?>
                            Оставьте сообщение
                            <?php else:?>
                            Lasa un mesaj
                            <?php endif;?>
                        </h2>
                    </div>
                </div>
            </div>
            <form method="post" action="../server/contact_us.php">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input required type="text" name="name" <?php if(check_lang_ru()):?> placeholder="Имя"<?php else:?>  placeholder="Nume"<?php endif;?>>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input required type="text" name="mail" <?php if(check_lang_ru()):?> placeholder="Введите свой email"<?php else:?> placeholder="Email"<?php endif;?>>
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea required name="msg" <?php if(check_lang_ru()):?> placeholder="Ваше сообщение" <?php else:?>placeholder="Mesajul tau"<?php endif;?>></textarea>
                        <button type="submit" class="site-btn"> <?php if(check_lang_ru()):?>Отправить сообщение<?php else:?>Trimite mesaj<?php endif;?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
<?php
require "../components/Footer.php"
?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>



</body>

</html>