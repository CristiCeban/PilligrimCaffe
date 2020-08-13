<?php
require "../components/Header.php"
    ?>

    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-3 mb-sm-2"> -->
                    <!-- <nav class="navbar navbar-expand-lg my-sm-1" id="category-bar"> -->
                                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                                        <span class="navbar-toggler-icon"></span>
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                        Categorii
                                    </button> -->


                            <!-- <div class="collapse navbar-collapse" id="main_nav"> -->

                                <!-- <ul class="navbar-nav">
                                
                                    <li class="nav-item dropdown">    
                                            <a class="nav-link" id="category-dropdown" href="#" data-toggle="dropdown">  Toate Categorii  </a>
                                        <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="shop_grid.php?cat=bauturi calde"> Caffea,ceai</a></li>
                                        <li><a class="dropdown-item" href="shop_grid.php?cat=Brutarie"> Brutarie</a></li>
                                        <li><a class="dropdown-item" href="#"> Bauturi nealc </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="shop_grid.php?cat=cafea rece"> Cafea rece</a></li>
                                                <li><a class="dropdown-item" href="shop_grid.php?cat=apa">Apa potabila</a></li>
                                                <li><a class="dropdown-item" href="shop_grid.php?cat=sucuri"> Sucuri </a></li>
                                                <li><a class="dropdown-item" href="shop_grid.php?cat=energizante"> Energizante</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="#"> Bauturi alc </a>
                                        <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="shop_grid.php?cat=vin"> Vin</a></li>
                                                <li><a class="dropdown-item" href="shop_grid.php?cat=coniac">Coniac</a></li>
                                                <li><a class="dropdown-item" href="shop_grid.php?cat=vodka"> Vodka </a></li>
                                                <li><a class="dropdown-item" href="shop_grid.php?cat=wiski"> Wisky</a></li>
                                                <li><a class="dropdown-item" href="shop_grid.php?cat=bere"> Bere</a></li>
                                            </ul>
                                        </li>
                                        
                                        
                                        <li><a class="dropdown-item" href="#"> Produse </a>
                                        <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="shop_grid.php?cat=Snack-uri"> Snack-uri</a></li>
                                                <li><a class="dropdown-item" href="shop_grid.php?cat=Zakuska la bere">La o bere</a></li>
                                                <li><a class="dropdown-item" href="shop_grid.php?cat=arahide">Arahide </a></li>
                                                                        
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="shop_grid.php?cat=tigari"> Tigari </a></li>
                                        </ul>
                                    </li>
                                
                                </ul> -->

                            <!-- </div> navbar-collapse.// -->
                    <!-- </nav> -->

                    
                <!-- </div> -->
                <div class="col-lg-7">
                     <div class="hero__search my-sm-1 mt-lg-1">
                        <div class="hero__search__form">
                            <form action="#" style="width=100%">
                                
                                <input type="text" placeholder="Termen de căutat">
                                <button type="submit" class="site-btn" style="color:black;">Caută</button>
                            </form>
                        </div>
                        <!-- <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div> -->

                    </div>
                
                    
                        
                    
                </div>
                <div class="col-lg-3">
                    <div class="menu-bar my-sm-1 ">
                        <ul class="mt-sm-0">
                            <li> <a href="./shoping-cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                   

                </div>

            </div>
            
        </div>
    </section>
        <section>
                        <div class="side-menu" id="side-menu">
                            <ul>
                                <li>Еда<i class="fa fa-angle-right"></i>
                                <ul>
                                <li>Снэки</li>	
                                <li>Сладкое</li>
                                <li>Шоколад</li>
                                </ul>
                                </li>
                            <li>Напитки<i class="fa fa-angle-right"></i>
                                <ul>
                                <li>Вода</li>	
                                <li>Соки, освежающие напитки</li>
                                    <a href="пиво.html"> <li>Пиво</li></a>
                                <li>Крепкие напитки</li>
                                </ul>
                            </li>
                            <li>Пекарня<i class="fa fa-angle-right"></i>
                            <ul>
                                <li>Форнети</li>	
                                </ul>
                            </li>
                            <li>Авто<i class="fa fa-angle-right"></i></li>
                            </ul>
                        </div>
            </section>

<!--Banner-->


    <div class="slider ">
    <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/banner1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/banner2.jpg" class="d-block w-100" alt="...">
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

<!--Bannner end-->
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/latte_macchiato.jpg">
                            <h5><a href="#">Bauturi calde</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/brutarie.jpg">
                            <h5><a href="#">Brutarie</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/soft_drinks1.jpg">
                            <h5><a href="#">Bauturi Nealcoolice</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/alc_drinks.jpg">
                            <h5><a href="#">Bauturi Alcoolice</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/prod_alim.jpg">
                            <h5><a href="#">Produse Alimentare</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/categories/cig.jpg">
                            <h5><a href="#">Tigari</a></h5>
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
    <script src= "js/bar-alter.js"></script>


</body>

</html>