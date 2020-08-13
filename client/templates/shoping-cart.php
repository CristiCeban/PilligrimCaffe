<?php
require "../components/Header.php";
$ids = isset($_COOKIE['card-list']) ? $_COOKIE['card-list'] : null;
if($ids) {
    $rs = $this->manager->getProductIds($ids);
}
else $rs = null;
$sum = 0;
?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do you need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Coș de cumpărături</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php">Pagina principală</a>
                            <span>Coș de cumpărături</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Produse</th>
                                    <th>Preț</th>
                                    <th>Cantitate</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if($ids)
                                foreach($rs as $result):
                                $sum+=$result->Pret?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="<?php echo $result->ImagePath ?>" alt="">
                                        <h5><?php echo $result->NumeProdus?></h5>
                                    </td>
                                    <td class="shoping__cart__price" id="price<?php echo $result->idProdus?>">
                                        <?php echo $result->Pret .' MDL' ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input oninput="sumOfProduct(<?php echo  $result->idProdus?>)" type="number" min="1" max="100" value="1" id="quantity<?php echo $result->idProdus?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total" id="sum_item<?php echo $result->idProdus?>">
                                        <?php echo $result->Pret.' MDL' ?>
                                    </td>
                                    <td class="shoping__cart__item__close" >
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Total</h5>
                        <ul>
<!--                            <li>Subtotal <span>$454.98</span></li>-->
                            <li>Suma: <span id = "total_sum"><?php echo $sum .' MDL' ?></span></li>
                        </ul>
                        <a href="./order_processing.php" class="primary-btn">Continuă Comanda</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
<?php
require "../components/Footer.php"
?>
    <!-- Footer Section End -->

    <script>

    </script>
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/shopping-cart.js"></script>


</body>

</html>