<?php
require_once('Entity/ticket.php');

if(isset($_POST['idUsername'])){
    $idUsername = $_POST['idUsername'];
}
if(isset($_POST['videoGameName'])){
    $videoGameName = $_POST['videoGameName'];
}
if(isset($_POST['categoryName'])){
    $categoryName = $_POST['categoryName'];
}
if(isset($_POST['consoleName'])){
    $consoleName = $_POST['consoleName'];
}
if(isset($_POST['quantity'])){
    $quantity = $_POST['quantity'];
}
if(isset($_POST['price'])){
    $price = $_POST['price'];
}
if(isset($_POST['total'])){
    $total = $_POST['total'];
}
if(isset($_POST['date'])){
    $date = $_POST['date'];
}
ticket::createTicket($idUsername,$videoGameName,$categoryName,$consoleName,$quantity,$price,$total,$date);
exit;