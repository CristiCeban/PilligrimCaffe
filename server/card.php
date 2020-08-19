<?php
//echo $_POST['id'];
if(!isset($_COOKIE['card-list'])){
    setcookie('card-list',$_POST['id'].',',time()+3600,'/');
}
else {
    $card_list = implode(',',array_unique(explode(',',$_COOKIE['card-list'].','.$_POST['id'])));
    setcookie('card-list',$card_list.',',time()+3600,'/');
}

header('Location: ../client/shop_grid.php?cat='.$_GET['cat']);