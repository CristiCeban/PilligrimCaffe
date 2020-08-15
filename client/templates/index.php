<?php
require "../components/Header.php";

require "../components/middle.php";

require "../components/end.php";
    ?>

    <!-- Header Section End -->

    <!-- Hero Section Begin -->
        <div class="container-fluid mb-5">
            <div class="row" >
                <div class="col-lg-3">
                    <div class="contenedor-menu mx-1">
		                <a href="" class="btnMenu"><?php if(check_lang_ru()):?>Меню<?php else:?>Menu<?php endif;?><i class="fa fa-bars"></i></a>
                        <ul class="menu">
                            <li><a href="shop_grid.php?cat=bauturi calde"><?php if(check_lang_ru()):?>Кофе, чай<?php else:?>Cafea,ceai<?php endif;?></a></li>
                            <li><a  href="shop_grid.php?cat=Brutarie"><?php if(check_lang_ru()):?>Пекарня<?php else:?>Brutarie<?php endif;?></a></li>
                            <li><a href="#"><?php if(check_lang_ru()):?>Безалкогольные напитки<?php else:?>Bauturi nealcoolice<?php endif;?><i class="fa fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="shop_grid.php?cat=cafea rece"><?php if(check_lang_ru()):?>Холодный кофе<?php else:?>Cafea rece<?php endif;?></a></li>
                                    <li><a href="shop_grid.php?cat=apa"><?php if(check_lang_ru()):?>Вода<?php else:?>Apa potabila<?php endif;?></a></li>
                                    <li><a href="shop_grid.php?cat=sucuri"><?php if(check_lang_ru()):?>Соки<?php else:?>Sucuri<?php endif;?></a></li>
                                    <li><a href="shop_grid.php?cat=energizante"><?php if(check_lang_ru()):?>Энергетики<?php else:?>Energizante<?php endif;?></a></li>
                                </ul>
                            </li>
                            
                            <li><a href="#"><?php if(check_lang_ru()):?>Алкогольные напитки<?php else:?>Bauturi alcoolice<?php endif;?><i class="fa fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="shop_grid.php?cat=vin"><?php if(check_lang_ru()):?>Вино<?php else:?>Vin<?php endif;?></a></li>
                                    <li><a href="shop_grid.php?cat=coniac"><?php if(check_lang_ru()):?>Коньяк<?php else:?>Coniac<?php endif;?></a></li>
                                    <li><a href="shop_grid.php?cat=vodka"><?php if(check_lang_ru()):?>Водкв<?php else:?>Vodka<?php endif;?></a></li>
                                    <li><a href="shop_grid.php?cat=wiski"><?php if(check_lang_ru()):?>Виски<?php else:?>Whisky<?php endif;?></a></li>
                                    <li><a href="shop_grid.php?cat=bere"><?php if(check_lang_ru()):?>Пиво<?php else:?>Bere<?php endif;?></a></li>
                                </ul>
                            </li>
                            
                            <li><a href="#"><?php if(check_lang_ru()):?>Продукты<?php else:?>Produse alimentare<?php endif;?><i class="fa fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="shop_grid.php?cat=Snack-uri"><?php if(check_lang_ru()):?>Снэки<?php else:?>Snack-uri<?php endif;?></a></li>
                                    <li><a href="shop_grid.php?cat=Zakuska la bere"><?php if(check_lang_ru()):?>К пиву<?php else:?>La o bere<?php endif;?></a></li>
                                    <li><a href="shop_grid.php?cat=arahide"><?php if(check_lang_ru()):?>Арахис<?php else:?>Arahide<?php endif;?></a></li>
                                </ul>
                            </li>
                            <li><a href="shop_grid.php?cat=tigari"><?php if(check_lang_ru()):?>Сигареты<?php else:?>Tigari<?php endif;?></a></li>
                            
                        </ul>
	                </div>
                </div>
                <div class="col-lg-9">
                    <!--Banner-->
                    <div class="slider">
                        <div id="slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#slider" data-slide-to="0" class="active"></li>
                                <li data-target="#slider" data-slide-to="1"></li>
                                <li data-target="#slider" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="carousel-img" src="images/banner4.jpg" class="d-block " alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img class="carousel-img" src="images/banner1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img class="carousel-img" src="images/banner2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            


<!--Bannner end-->
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/latte_macchiato.jpg">
                            <h5><a href="#"><?php if(check_lang_ru()):?>Кофе, чай<?php else:?>Cafea,ceai<?php endif;?></a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/brutarie.jpg">
                            <h5><a href="#"><?php if(check_lang_ru()):?>Пекарня<?php else:?>Brutarie<?php endif;?></a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/soft_drinks1.jpg">
                            <h5><a href="#"><?php if(check_lang_ru()):?>Безалкогольные напитки<?php else:?>Bauturi nealcoolice<?php endif;?></a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/alc_drinks.jpg">
                            <h5><a href="#"><?php if(check_lang_ru()):?>Алкогольные напитки<?php else:?>Bauturi alcoolice<?php endif;?></a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/prod_alim.jpg">
                            <h5><a href="#"><?php if(check_lang_ru()):?>Продукты<?php else:?>Produse alimentare<?php endif;?></a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/cig.jpg">
                            <h5><a href="#"><?php if(check_lang_ru()):?>Сигареты<?php else:?>Tigari<?php endif;?></a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
<?php
require "../components/Featured Products.php"
?>
    <!-- Featured Section End -->


    <!-- Footer Section Begin -->
<?php
require "../components/Footer.php"
?>
    <!-- Footer Section End -->

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