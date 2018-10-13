<?php
require_once('Entity/stock.php');

if(isset($_POST['idVideoGame'])){
    $idVideoGame = $_POST['idVideoGame'];
}
if(isset($_POST['idConsole'])){
    $idConsole = $_POST['idConsole'];
}
if(isset($_POST['stock'])){
    $stock = $_POST['stock'];
}
stock::createStock($idVideoGame,$idConsole,$stock);
exit;