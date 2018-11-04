<?php
require_once('Entity/ticket.php');

// if(isset($_POST['id'])){
//     $id = $_POST['id'];
// }

if(isset($_POST['id_user'])){
    $idUser = $_POST['id_user'];
}
if(isset($_POST['title'])){
    $title = $_POST['title'];
}
if(isset($_POST['category'])){
    $category = $_POST['category'];
}
if(isset($_POST['console_id'])){
    $consoleId = $_POST['console_id'];
}
if(isset($_POST['quantity'])){
    $quantity = $_POST['quantity'];
}
if(isset($_POST['price'])){
    $price = $_POST['price'];
}
ticket::createTicket($idUser,$title,$category,$consoleId,$quantity,$price);
exit;