<?php
require_once('Entity/stock.php');
if(isset($_POST['idVideogame'])){
    $id_videogame = $_POST['idVideogame'];
}
if(isset($_POST['stock'])){
    $new_stock = $_POST['stock'];
}
stock::updateStock($id_videogame,$new_stock);
exit;

