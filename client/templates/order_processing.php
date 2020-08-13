<?php

require "../components/Header.php";
?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="https://developers.klarna.com/static/KCO-Header.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Check-out</h2>
                    <div class="breadcrumb__option">
                        <a href="index.php">Pagina principală</a>
                        <span>Check-out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


<div class="row">
    <div class="col-lg-3" >
<!--        style="background: #0f6674">-->


    </div>
    <div class="col-lg-4 col-md-8 shadow p-3 mb-5 bg-white rounded" style="background: white">
        <div class="container align-items-center justify-content-center">
            <h3>
                <span class="tag_delivery">1</span>
                <span class="rand_tag_delivery">Detalii livrare </span>
            </h3>
            <br>
            <h2>
                Adresa de livrare:
            </h2>

            <div class="row">
                <div class="col-md-6">
                    <input style="width: 90%" type="text" placeholder="Adresa">
                </div>
                <div class="col-md-6">
                    <input style="width: 90%" type="text" placeholder="orasul/satul">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input style = "width: 95.5%" type="text" placeholder="Informatii suplimentarea,scara,etaj,bloc,safonier">
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-2 col-md-4">
        <h3>Comanda ta de la Pilligrim Caffe:</h3>
        <br>
        <h5><strong>1</strong> x Bugher nahui</h5>
        <br>
        <hr class="my-4">
    </div>


    <div class="col-lg-3" >
<!--         style="background: #17a2b8">-->
    </div>
</div>





<?php
require "../components/Footer.php"
?>
