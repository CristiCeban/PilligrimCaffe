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
		                <a href="" class="btnMenu">Menu/Меню <i class="fa fa-bars"></i></a>
                        <ul class="menu">
                            <li><a href="shop_grid.php?cat=bauturi calde">Cafea,ceai/Кофе, чай</a></li>
                            <li><a  href="shop_grid.php?cat=Brutarie">Brutarie/ Пекарня</a></li>
                            <li><a href="#">Bauturi nealcoolice/ Безалкогольные напитки <i class="fa fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="shop_grid.php?cat=cafea rece">Cafea rece/ Холодный кофе</a></li>
                                    <li><a href="shop_grid.php?cat=apa">Apa potabila/ Вода</a></li>
                                    <li><a href="shop_grid.php?cat=sucuri">Sucuri/ Соки</a></li>
                                    <li><a href="shop_grid.php?cat=energizante">Energizante/ Энергетики</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="#">Bauturi alcoolice/ Алкогольные напитки<i class="fa fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="shop_grid.php?cat=vin">Vin/ Вино</a></li>
                                    <li><a href="shop_grid.php?cat=coniac">Coniac/Коньяк</a></li>
                                    <li><a href="shop_grid.php?cat=vodka">Vodka/Водкв</a></li>
                                    <li><a href="shop_grid.php?cat=wiski"">Whisky/Виски</a></li>
                                    <li><a href="shop_grid.php?cat=bere">Bere/Пиво</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="#">Produse alimentare/Продукты <i class="fa fa-chevron-down"></i></a>
                                <ul>
                                    <li><a href="shop_grid.php?cat=Snack-uri">Snack-uri/Снэки</a></li>
                                    <li><a href="shop_grid.php?cat=Zakuska la bere">La o bere/К пиву</a></li>
                                    <li><a href="shop_grid.php?cat=arahide">Arahide/Арахис</a></li>
                                </ul>
                            </li>
                            <li><a href="shop_grid.php?cat=tigari">Tigari/Сигареты</a></li>
                            
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
                            <h5><a href="#">Bauturi calde/Горячие напитки</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/brutarie.jpg">
                            <h5><a href="#">Brutarie/Пекарня</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/soft_drinks1.jpg">
                            <h5><a href="#">Bauturi Nealcoolice/Безалкогольные напитки</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/alc_drinks.jpg">
                            <h5><a href="#">Bauturi Alcoolice/Алкогольные напитки</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/prod_alim.jpg">
                            <h5><a href="#">Produse Alimentare/Продукты</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/cig.jpg">
                            <h5><a href="#">Tigari/Сигареты</a></h5>
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