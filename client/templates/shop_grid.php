<?php

require "../components/Header.php";

echo $this->categorie;
?>

<?php foreach($this->result_set as $item){
    echo '<p'.$item->NumeProdus.'/>';
}?>


<?php
require "../components/Footer.php";
?>
