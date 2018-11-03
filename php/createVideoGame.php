<?php
require_once('Entity/videogame.php');

if(is_uploaded_file($_FILES['Thumbnail']['tmp_name'])==false){
    exit;
}else{
    // $thumbnail = addslashes($_FILES['Thumbnail']['tmp_name']);
    // $name = addslashes($_FILES['Thumbnail']['tmp_name']);
    // $thumbnail = file_get_contents($thumbnail);
    // $thumbnail = base64_encode($thumbnail);
    $thumbnail =addslashes (file_get_contents($_FILES['Thumbnail']['tmp_name']));
    var_dump($thumbnail);
    //die;
}
if(isset($_POST['Company'])){
    $company = $_POST['Company'];
}
if(isset($_POST['consoleId'])){
    $consoleId = $_POST['consoleId'];
}
if(isset($_POST['Title'])){
    $title = $_POST['Title'];
}
if(isset($_POST['Price'])){
    $price = $_POST['Price'];
}
if(isset($_POST['releaseDate'])){
    $releaseDate = $_POST['releaseDate'];
}
if(isset($_POST['Description'])){
    $description = $_POST['Description'];
}
if(isset($_POST['providerName'])){
    $providerName = $_POST['providerName'];
}
videogame::createVideogame($thumbnail,$company,$consoleId,$title,$price,$releaseDate,$description,$providerName);
exit;