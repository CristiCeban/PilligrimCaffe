<?php

require "../components/Header.php";
require "../components/end.php";
?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg"  style="background-image: url('images/check_out.jpg');">
    <div class="container">
        <div class="row" style="height: 120px">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Finalizare comandă/Завершить покупку</h2>
                    <div class="breadcrumb__option">
                        <a href="index.php">Pagina principală/Главная</a>
                        <span>Finalizare comandă/Завершить покупку</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<div class="container-fluid mt-5">
<div class="row">
    <div class="col-lg-3">
<!--        style="background: #0f6674">-->


    </div>


    <div class="col-lg-4 col-md-8">
        <form method="post" action="../server/cart_processing.php">

            <div class="container align-items-center justify-content-center shadow p-3 mb-5 bg-white rounded" style="background: white">
                <h3>
                    <span class="tag_delivery">1</span>
                    <span class="rand_tag_delivery">Detalii livrare </span>
                </h3>
                <br>
                <h2>
                    Adresa de livrare:
                </h2>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-6">
                        <input name="address" style="width: 90%" type="text" placeholder="Adresa">
                    </div>
                    <div class="col-md-6">
                        <input name="city" style="width: 90%" type="text" placeholder="orasul/satul">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea name="supplementary_info" style="width: 95.5%;margin-top: 30px" rows="4"  placeholder="Informatii suplimentarea,scara,etaj,bloc,safonier"></textarea>
                    </div>
                </div>
            </div>


            <div class="container align-items-center justify-content-center shadow p-3 mb-5 bg-white rounded" style="background: white">
                <h3>
                    <span class="tag_delivery">2</span>
                    <span class="rand_tag_delivery">Date Personale</span>
                </h3>
                <br>
                <h2>
                    Adresa de livrare:
                </h2>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-6">
                        <input name="surname" style="width: 90%" type="text" placeholder="Nume">
                    </div>
                    <div class="col-md-6">
                        <input name="name" style="width: 90%" type="text" placeholder="Prenume">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <input name="mobile" style="width: 95.5%;margin-top: 30px" type="text" placeholder="Numar mobil">
                    </div>
                </div>

            </div>

            <div class="container row justify-content-center align-items-center text-center mb-4">
                    <button type="submit" class="btn btn-primary  " style="width: 50%">Submit</button>
            </div>
        </form>



    </div>


    <div class="col-lg-2 col-md-4" style="margin-top: 25px">
        <h3>Comanda ta de la Pilligrim Caffe:</h3>
        <br>
        <h5><strong>1</strong> x Bugher nahui</h5>
        <br>
        <hr class="my-4">
    </div>


    <div class="col-lg-3">
<!--         style="background: #17a2b8">-->
    </div>
</div>
</div>


<?php
require "../components/Footer.php"
?>
