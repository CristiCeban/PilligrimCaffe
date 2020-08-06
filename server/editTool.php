<?php

include_once '../client/config/init.php';
$manager = new Product();

?>

<?php

if(isset($_GET['idProdus'])) {
    $product = $manager->getProduct($_GET['idProdus']);

    ?>

    <!----------------------------------------USER---------------------------------------->

    <div class="container justify-content-center padding-top">
        <form action="editToDb.php?<?php echo 'idProdus='.$_GET['idProdus']; ?>" class="padding-top" method="post">
            <!---------------------1 row---------------->
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <p>Названия продукта</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="numeProdus" type="text" class="form-control" value="<?php echo $product->NumeProdus?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Цена</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="pret" type="text" class="form-control" value="<?php echo $product->Pret?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Путь до Картинки</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="imagePath" type="text" class="form-control" value="<?php echo $product->ImagePath?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Картинка</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group" style="width: 200px;">
                        <img style="max-width:100%;height:auto;" src = <?php echo $product->ImagePath?> >
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Категория</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <div class="col-md-12 col-lg-3">
                            <select class="list-group-item" style="text-align-last: center" name="category">
                                <option selected><?php echo $product->categorie?></option>
                                <option>Горячие Напитки</option>
                                <option>Б/А напитки:Холодный Коффе</option>
                                <option>Б/А напитки:Вода</option>
                                <option>Б/А напитки:Сок</option>
                                <option>Б/А напитки:Энергетик</option>
                                <option>Алкоол. напитки:Вино</option>
                                <option>Алкоол. напитки:Коньяк</option>
                                <option>Алкоол. напитки:Виски</option>
                                <option>Алкоол. напитки:Водка</option>
                                <option>Алкоол. напитки:Пиво</option>
                                <option>Продукты:Снэки</option>
                                <option>Продукты:Закуска к пиву</option>
                                <option>Продукты:Орешки</option>
                                <option>Продукты:Сладости</option>
                                <option>Сигареты</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!----------Button------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="col text-center padding-bottom">
                        <button name="btn_edit_product" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php
}
