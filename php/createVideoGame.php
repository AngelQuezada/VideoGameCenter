<?php
require_once('Entity/videogame.php');

if(is_uploaded_file($_FILES['Thumbnail']['tmp_name'])==false){
    exit;
}else{
    $thumbnail = addslashes (file_get_contents($_FILES['Thumbnail']['tmp_name']));
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
if(isset($_POST['Category'])){
    $category = $_POST['Category'];
}
if(isset($_POST['Description'])){
    $description = $_POST['Description'];
}
if(isset($_POST['providerName'])){
    $providerName = $_POST['providerName'];
}
videogame::createVideogame($thumbnail,$company,$consoleId,$title,$price,$releaseDate,$category,$description,$providerName);
exit;