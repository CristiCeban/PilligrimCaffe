<html>
<?php
    require "../components/Header.php";
?>
<body>

<!-----------------shopping-cart---------->
<section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
                <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img class="cart-item-image" src="Images/Shirt.png" width="100" height="100">
                        <span class="cart-item-title">T-Shirt</span>
                    </div>
                    <span class="cart-price cart-column">MDL19.99</span>
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="1">
                        <button class="btn btn-danger" type="button">REMOVE</button>
                    </div>
                </div>
                <div class="cart-row">
                    <div class="cart-item cart-column">
                        <img class="cart-item-image" src="Images/Album 3.png" width="100" height="100">
                        <span class="cart-item-title">Album 3</span>
                    </div>
                    <span class="cart-price cart-column">MDL9.99</span>
                    <div class="cart-quantity cart-column">
                        <input class="cart-quantity-input" type="number" value="2">
                        <button class="btn btn-danger" type="button">REMOVE</button>
                    </div>
                </div>
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">MDL39.97</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
     <!------------------Footer----------------->
    <section class="footer">
        <div class="container tex-center">
            <div class="row">
                <div class="col-md-3">
                <h1>Полезные ссылки</h1>
                    <p>Политика конфиденциалности</p>
                    <p>Условия эксплуатации</p></div>
                    
                      <div class="col-md-3">
                    <h1>Магазин</h1>
                    <p>О нас</p>
                    <p>Контакты</p>
                    <p>Адрес:</p>
                    <p>  Str. Chișinăului, 68 Anenii Noi, Moldova</p>
                    </div>
            </div>
        </div>
    </section>

<!--  Footer-->
<?php
    require "../components/Footer.php";
?>

   </body>
</html>