<?php
require "../components/Header.php";
require "../components/end.php";
$ids = isset($_COOKIE['card-list']) ? $_COOKIE['card-list'] : null;
if($ids) {
    $rs = $this->manager->getProductIds($ids);
}
else $rs = null;
$sum = 0;
?>



    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="images/shopping_bag.jpg">
        <div class="container">
            <div class="row" style="height: 120px">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Coș de cumpărături/Корзина</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php">Pagina principală/Главная</a>
                            <span>Coș de cumpărături/Корзина</span>
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
                                    <th class="shoping__product">Imagine</th>
                                    <th>Produs/Продукт</th>
                                    <th>Preț/Цена</th>
                                    <th>Cantitate/Количество</th>
                                    <th>Total/Всего</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if($ids)
                                foreach($rs as $result):
                                $sum+=$result->Pret?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img class="shop-cart-img fluid" style="width: 150px" src="<?php echo $result->ImagePath ?>" alt="">
                                    </td>
                                    <td>
                                        <h5><?php echo $result->NumeProdus?></h5>
                                    </td>
                                    <td class="shoping__cart__price" id="price<?php echo $result->idProdus?>">
                                        <?php echo $result->Pret .' MDL' ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">                                           
                                                <input style="width: 50px; height:30px;" oninput="sumOfProduct(<?php echo  $result->idProdus?>)" type="number" min="1" max="100" value="1" id="quantity<?php echo $result->idProdus?>">  
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
                        <h5>Total/К оплате</h5>
                        <ul>
                            <li>Suma:/Сумма: <span id = "total_sum"><?php echo $sum .' MDL' ?></span></li>
                        </ul>
                        <a href="" onclick="sendToCheckout()" class="primary-btn">Continuă Comanda/Продолжить заказ</a>
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