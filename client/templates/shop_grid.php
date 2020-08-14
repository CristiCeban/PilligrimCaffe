<?php

require "../components/Header.php";
require "../components/end.php";
$rs = $this->manager->getProductbyCategory($this->categorie);
?>

<?php foreach($rs as $r): ?>
    <div class="card">
        <form method="post" action="../server/card.php">
            <img src=<?php echo $r->ImagePath ?>  alt=<?php echo $r->NumeProdus?> style="width:100%">
            <h1><?php echo $r->NumeProdus?></h1>
            <p class="price"><?php echo $r->Pret?> MDL</p>
            <label>
                <input  type="hidden" name="id" value="<?php echo $r->idProdus;?>"/>
            </label>
            <p><button type="submit" >Add to Cart</button></p>
        </form>
    </div>

<?php
endforeach;
?>


<?php
require "../components/Footer.php";
?>
