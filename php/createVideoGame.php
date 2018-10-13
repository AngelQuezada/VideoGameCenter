<?php
require_once('Entity/videogame.php');

if(isset($_POST['thumbnail'])){
    $thumbnail = $_POST['thumbnail'];
}
if(isset($_POST['company'])){
    $company = $_POST['company'];
}
if(isset($_POST['consoleName'])){
    $consoleName = $_POST['consoleName'];
}
if(isset($_POST['title'])){
    $title = $_POST['title'];
}
if(isset($_POST['price'])){
    $price = $_POST['price'];
}
if(isset($_POST['releaseDate'])){
    $releaseDate = $_POST['releaseDate'];
}
if(isset($_POST['description'])){
    $description = $_POST['description'];
}
if(isset($_POST['providerName'])){
    $providerName = $_POST['providerName'];
}
videogame::createVideogame($thumbnail,$company,$consoleName,$title,$price,$releaseDate,$description,$providerName);
exit;