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
                    <h2>
                        <?php if(check_lang_ru()):?>
                        Завершить покупку
                        <?php else:?>
                        Finalizare comandă
                        <?php endif;?>
                    </h2>
                    <div class="breadcrumb__option">
                        <a href="index.php"><?php if(check_lang_ru()):?>Главная  <?php else:?>Pagina principală  <?php endif;?></a>
                        <span><?php if(check_lang_ru()):?>Завершить покупку  <?php else:?>Finalizare comandă  <?php endif;?></span>
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
                    <span class="rand_tag_delivery"><?php if(check_lang_ru()):?>Подробности длставки  <?php else:?>Detalii livrare  <?php endif;?></span>
                </h3>
                <br>
                <h2>
                    <?php if(check_lang_ru()):?>Адрес доставки:<?php else:?>Adresa de livrare:  <?php endif;?>
                </h2>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-6">
                        <input name="address" style="width: 90%" type="text" <?php if(check_lang_ru()):?>placeholder="Адрес"  <?php else:?>placeholder="Adresa"<?php endif;?>>
                    </div>
                    <div class="col-md-6">
                        <input name="city" style="width: 90%" type="text" <?php if(check_lang_ru()):?>placeholder="Город/Село"<?php else:?>placeholder="Orasul/Satul"  <?php endif;?>>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea name="supplementary_info" style="width: 95.5%;margin-top: 30px" rows="4" <?php if(check_lang_ru()):?>placeholder="Дополнительная информация,блок,подъезд,этаж,квартира"<?php else:?>placeholder="Informatii suplimentarea,bloc,scara,etaj,apartamentul"  <?php endif;?>></textarea>
                    </div>
                </div>
            </div>


            <div class="container align-items-center justify-content-center shadow p-3 mb-5 bg-white rounded" style="background: white">
                <h3>
                    <span class="tag_delivery">2</span>
                    <span class="rand_tag_delivery"><?php if(check_lang_ru()):?>Персональные данные  <?php else:?>Date Personale  <?php endif;?></span>
                </h3>
                <br>
                <div class="row" style="margin-top: 15px">
                    <div class="col-md-6">
                        <input name="surname" style="width: 90%" type="text"<?php if(check_lang_ru()):?>placeholder="Фамилия"  <?php else:?>placeholder="Nume"  <?php endif;?>>
                    </div>
                    <div class="col-md-6">
                        <input name="name" style="width: 90%" type="text"<?php if(check_lang_ru()):?>placeholder="Имя"<?php else:?>placeholder="Prenume"  <?php endif;?>>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <input name="mobile" style="width: 95.5%;margin-top: 30px" type="text"<?php if(check_lang_ru()):?>placeholder="Номер телефона"<?php else:?>placeholder="Numar mobil"  <?php endif;?>>
                    </div>
                </div>

            </div>

            <div class="container row justify-content-center align-items-center text-center mb-4">
                    <button type="submit" class="btn btn-primary  " style="width: 50%"><?php if(check_lang_ru()):?>Отправить заказ  <?php else:?>Trimite comanda  <?php endif;?></button>
            </div>
        </form>



    </div>


    <div class="col-lg-2 col-md-4" style="margin-top: 25px">
        <h3>
            <?php if(check_lang_ru()):?>
            Твой заказ из Pilligrim Caffe:
            <?php else:?>
            Comanda ta de la Pilligrim Caffe:
            <?php endif;?>аше
        </h3>
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
