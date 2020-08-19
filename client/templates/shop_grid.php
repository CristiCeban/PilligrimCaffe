<?php

require "../components/Header.php";
require "../components/middle.php";
require "../components/end.php";
if ($this->categorie)
    $rs = $this->manager->getProductbyCategory($this->categorie);
elseif ($this->search)
    $rs = $this->manager->getProductsByStr($this->search);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="contenedor-menu mx-1">
                <a href="" class="btnMenu"><?php if(check_lang_ru()):?>Меню<?php else:?>Menu<?php endif;?><i class="fa fa-bars"></i></a>
                <ul class="menu">
                    <li><a href="shop_grid.php?cat=bauturi calde"><?php if(check_lang_ru()):?>Кофе, чай<?php else:?>Cafea,ceai<?php endif;?></a></li>
                    <li><a  href="shop_grid.php?cat=Brutarie"><?php if(check_lang_ru()):?>Пекарня<?php else:?>Brutarie<?php endif;?></a></li>
                    <li><a href="#"><?php if(check_lang_ru()):?>Безалкогольные напитки<?php else:?>Bauturi nealcoolice<?php endif;?><i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="shop_grid.php?cat=cafea rece"><?php if(check_lang_ru()):?>Холодный кофе<?php else:?>Cafea rece<?php endif;?></a></li>
                            <li><a href="shop_grid.php?cat=apa"><?php if(check_lang_ru()):?>Вода<?php else:?>Apa potabila<?php endif;?></a></li>
                            <li><a href="shop_grid.php?cat=sucuri"><?php if(check_lang_ru()):?>Соки<?php else:?>Sucuri<?php endif;?></a></li>
                            <li><a href="shop_grid.php?cat=energizante"><?php if(check_lang_ru()):?>Энергетики<?php else:?>Energizante<?php endif;?></a></li>
                        </ul>
                    </li>

                    <li><a href="#"><?php if(check_lang_ru()):?>Алкогольные напитки<?php else:?>Bauturi alcoolice<?php endif;?><i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="shop_grid.php?cat=vin"><?php if(check_lang_ru()):?>Вино<?php else:?>Vin<?php endif;?></a></li>
                            <li><a href="shop_grid.php?cat=coniac"><?php if(check_lang_ru()):?>Коньяк<?php else:?>Coniac<?php endif;?></a></li>
                            <li><a href="shop_grid.php?cat=vodka"><?php if(check_lang_ru()):?>Водкв<?php else:?>Vodka<?php endif;?></a></li>
                            <li><a href="shop_grid.php?cat=wiski"><?php if(check_lang_ru()):?>Виски<?php else:?>Whisky<?php endif;?></a></li>
                            <li><a href="shop_grid.php?cat=bere"><?php if(check_lang_ru()):?>Пиво<?php else:?>Bere<?php endif;?></a></li>
                        </ul>
                    </li>

                    <li><a href="#"><?php if(check_lang_ru()):?>Продукты<?php else:?>Produse alimentare<?php endif;?><i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="shop_grid.php?cat=Snack-uri"><?php if(check_lang_ru()):?>Снэки<?php else:?>Snack-uri<?php endif;?></a></li>
                            <li><a href="shop_grid.php?cat=Zakuska la bere"><?php if(check_lang_ru()):?>К пиву<?php else:?>La o bere<?php endif;?></a></li>
                            <li><a href="shop_grid.php?cat=arahide"><?php if(check_lang_ru()):?>Арахис<?php else:?>Arahide<?php endif;?></a></li>
                        </ul>
                    </li>
                    <li><a href="shop_grid.php?cat=tigari"><?php if(check_lang_ru()):?>Сигареты<?php else:?>Tigari<?php endif;?></a></li>

                </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
                
                    <?php if(isset($rs))
                        foreach($rs as $r): ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="card h-100">
                            <form>
                                <div class="img-thumbnail">
                                    <img src=<?php echo $r->ImagePath ?>  alt=<?php echo $r->NumeProdus?>>
                                </div>
                                <h4><?php if(check_lang_ru()) echo $r->NumeProdusRu;  else echo $r->NumeProdus;?></h4>
                                <p class="price"><?php echo $r->Pret?> MDL</p>
                                <label>
                                    <input  type="hidden" name="id" value="<?php echo $r->idProdus;?>"/>
                                </label>
                                <p><button type="button" onclick="setItemToCardList(<?php echo $r->idProdus?>)"><?php if(check_lang_ru()):?>Добавить в корзину<?php else:?>Adaugă în coș<?php endif;?></button></p>
                            </form>
                        </div>
                    </div>
                    <?php
                    endforeach;
                    ?>
                
            </div>



        </div>


    </div>
</div>




<?php
require "../components/Footer.php";
?>

