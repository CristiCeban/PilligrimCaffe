<html>
<?php
    require "../components/Header.php";
?>
<body>
<div class="top-nav-bar">
<div class="search-box">
	<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
	<i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
<img src="../images/logo_final.jpg" class="logo">
<input type="text" class="form-control">
<span class="input-group-text"><i class="fa fa-search"></i></span>
</div>
<div class="menu-bar">
<ul>
    <a href="shopping-cart.html"><li><i class="fa fa-shopping-cart"></i></li></a>
    </ul>
</div>
</div>

<section class="header">
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
<div class="slider">
	<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/nutline.png" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/chio.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="../images/kozel.jpg" class="d-block w-100">
    </div>
  </div>
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
  </ol>
</div>
</div>
</section>
    
	<script>
		function openmenu()
	{
		document.getElementById("side-menu").style.display="block";
		document.getElementById("menu-btn").style.display="none";
		document.getElementById("close-btn").style.display="block";
	}
	function closemenu()
	{
		document.getElementById("side-menu").style.display="none";
		document.getElementById("menu-btn").style.display="block";
		document.getElementById("close-btn").style.display="none";
	}
	</script>
<!-- Footer-->
    <section>
    <?php
    require "../components/Footer.php";
?>
    </section>
</body>
</html>




































