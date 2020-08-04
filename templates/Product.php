<html>
<?php
    require "../components/Header.php";
?>
<body>
<div class="top-nav-bar">
<div class="search-box">
	<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
	<i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
<a href="index.html"> <img src="../images/logo_final.jpg" class="logo"></a>
<input type="text" class="form-control">
<span class="input-group-text"><i class="fa fa-search"></i></span>
</div>
<div class="menu-bar">
<ul>
<a href="shopping-cart.html"><li><i class="fa fa-shopping-cart"></i></li></a>
</ul>
</div>
</div>
    <!-----------------Single product------------>
    <section class="single-product">
    <div class="container">
        <div class="row">
        <div class="col-md-5">
	<div id="product-slider" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/chio_barbecue.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="../images/chio_paprika.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="../images/chio_salt.jpg" class="d-block w-100">
    </div>
        </div>
               <a class="carousel-control-prev" href="#product-slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#product-slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
              </div>
            <div class="col-md-7">
            <p class="new-arrival text-center">
                </p>
            </div>
</div>  
    <div class="col-md-7">
                <h2>Chio Чипсы</h2>
                <p class="price">MDL 20.00</p>
        
                <input type="radio" name="type" value="salt"> Salt
                <input type="radio" name="type" value="peperoni"> Peperoni
                <input type="radio" name="type" value="barbecue"> Barbecue
        <ul>
                <label>Количество:</label>
                <input id="txt-box" type="text" value="1">
            <button type="button" class="btn btn-primary shop-item-button">Add to Cart</button>
        </ul>
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