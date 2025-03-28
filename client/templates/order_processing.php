<?php

require "../components/Header.php";
require "../components/end.php";

?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set_bg"  style="background-image: url('images/check_out.jpg');">
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
                    <span class="rand_tag_delivery"><?php if(check_lang_ru()):?>Подробности доставки  <?php else:?>Detalii livrare  <?php endif;?></span>
                </h3>
                <br>
                <h2>
                    <?php if(check_lang_ru()):?>Адрес доставки:<?php else:?>Adresa de livrare:  <?php endif;?>
                </h2>

                <div class="row" style="margin-top: 15px">
                    <div class="col-md-6">
                        <input name="address" required style="width: 90%" type="text" <?php if(check_lang_ru()):?>placeholder="Адрес"  <?php else:?>placeholder="Adresa"<?php endif;?>
                        <?php if(isset($_COOKIE['address_dest'])) echo 'value="'.$_COOKIE['address_dest'].'"' ?>>
                    </div>
                    <div class="col-md-6">
                        <input name="city" required style="width: 90%" type="text" <?php if(check_lang_ru()):?>placeholder="Город/Село" <?php else:?>placeholder="Orasul/Satul"  <?php endif;?>
                            <?php if(isset($_COOKIE['city_dest'])) echo 'value="'.$_COOKIE['city_dest'].'"' ?>>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea  name="supplementary_info" style="width: 95.5%;margin-top: 30px" rows="4" <?php if(check_lang_ru()):?>placeholder="Дополнительная информация,блок,подъезд,этаж,квартира" <?php else:?>placeholder="Informatii suplimentarea,bloc,scara,etaj,apartamentul"  <?php endif;?> <?php if(isset($_COOKIE['supplementary_info'])) echo 'value="'.$_COOKIE['supplementary_info'].'"' ?>></textarea>
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
                        <input required name="surname" style="width: 90%" type="text" <?php if(check_lang_ru()):?> placeholder="Фамилия"  <?php else:?>placeholder="Nume"  <?php endif;?>
                            <?php if(isset($_COOKIE['surname'])) echo 'value="'.$_COOKIE['surname'].'"' ?>>
                    </div>
                    <div class="col-md-6">
                        <input required name="name" style="width: 90%" type="text" <?php if(check_lang_ru()):?> placeholder="Имя" <?php else:?>placeholder="Prenume"  <?php endif;?>
                            <?php if(isset($_COOKIE['name'])) echo 'value="'.$_COOKIE['name'].'"' ?>>
                    </div>
                </div>

                <input type="hidden" name="fields" value="<?php echo htmlspecialchars(json_encode($this->fields));?>">
                <input type="hidden" name="sum" value="<?php echo $this->sum;?>">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <input  required name="mobile" style="width: 95.5%;margin-top: 30px" type="text" <?php if(check_lang_ru()):?> placeholder="Номер телефона" <?php else:?>placeholder="Numar mobil"<?php endif;?>
                            <?php if(isset($_COOKIE['mobile'])) echo 'value="'.$_COOKIE['mobile'].'"' ?>>
                            <div class="mt-3">
                                <input type="radio" required name="plata" value="cash"
                                    <?php if(isset($_COOKIE['plata'])) echo 'value="'.$_COOKIE['cash'].'"' ?>>
                                <label for="cash"><?php if(check_lang_ru()):?>Платеж наличными <?php else:?>Plata cu numerar<?php endif;?></label><br>
                                <input type="radio" required name="plata" value="card"
                                    <?php if(isset($_COOKIE['plata'])) echo 'value="'.$_COOKIE['card'].'"' ?>>
                                <label for="card"><?php if(check_lang_ru()):?>Платеж картой<?php else:?>Plata cu cardul<?php endif;?></label><br>
                            </div>
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
            <?php endif;?>
        </h3>
        <br>
        <?php foreach ($this->fields as $key => $value){
            if(check_lang_ru())
                echo '<h5><strong>'.$value.'</strong> x ' . $this->manager->getProduct($key)->NumeProdusRu.' + <u>'.(int)$value*(int)$this->manager->getProduct($key)->Pret.' MDL</u></h5>';
            else
                echo '<h5><strong>'.$value.'</strong> x ' . $this->manager->getProduct($key)->NumeProdus.' + <u>'.(int)$value*(int)$this->manager->getProduct($key)->Pret.' MDL</u></h5>';
        }?>
        <br>
        <h4><strong><?php echo $this->sum ?></strong></h4>
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
