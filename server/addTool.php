<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha256-KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM=" crossorigin="anonymous"></script>
    <title>Add</title>
</head>
<body>

<?php

include_once '../client/config/init.php';

$manager = new Product();
?>
<?php
if(isset($_GET['idUtilizator'])&&$_GET['idUtilizator']==='true') {
    ?>
    <div class="container justify-content-center padding-top">
        <form class="padding-top" method="post" action="addToDb.php">
            <!---------------------1 row---------------->
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <p>Логин</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="login" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Пароль</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input required name="mdp" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Роль</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <select class="list-group-item" style="text-align-last: center" name="role">
                        <option selected>user</option>
                        <option>admin</option>
                    </select>
                    <!--<div class="form-group">
                        <input required name="role" type="text" class="form-control">
                    </div>-->
                </div>
            </div>
            <!----------Button------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="col text-center padding-bottom">
                        <button name="btn_add_user" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php
} elseif (isset($_GET['idProdus'])&&$_GET['idProdus']==='true') {
    ?>
<div class="container justify-content-center padding-top">
    <form class="padding-top" method="post" action="addToDb.php">
        <!---------------------1 row---------------->
        <div class="row">
            <div class="col-md-12 col-lg-3">
                <p>Названия</p>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="form-group">
                    <input required name="NumeProdus" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <p>Цена</p>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="form-group">
                    <input required name="Pret" type="number" class="form-control">
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <p>Путь до картинки (URL)</p>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="form-group">
                    <input required name="ImagePath" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <select class="list-group-item" style="text-align-last: center" name="category">
                    <option selected>Горячие Напитки</option>
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
        <!----------Button------------->
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="col text-center padding-bottom">
                    <button name="btn_add_product" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
}
?>