<html>
<?php
    require "../components/Header.php";
?>
<body>
<div class="top-nav-bar">
<div class="search-box">
	<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
	<i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
<a href="index.html"> <img src="images/logo_final.jpg" class="logo"></a>
<input type="text" class="form-control">
<span class="input-group-text"><i class="fa fa-search"></i></span>
</div>
<div class="menu-bar">
<ul>
 <a href="shopping-cart.html"><li><i class="fa fa-shopping-cart"></i></li></a>

</ul>
</div>
</div>
    <!-----------------catalogue------------>
    <section>
<div class="item">
  <img src="images/kozel.jpg" alt="Beer" style="width:100%">
  <h1 class="shop-item-title">Kozel Beer</h1>
  <p class="shop-item-price">20.00MDL</p>
  <p><button class="shop-item-button">Add to Cart</button></p>
</div>
        <div class="item">
  <img src="images/chisinau.jpg" alt="Beer" style="width:100%">
  <h1 class="shop-item-title">Chisinau Beer</h1>
  <p class="shop-item-price">18.00MDL</p>
  <p><button class="shop-item-button">Add to Cart</button></p>
</div>
        
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