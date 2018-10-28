<?php

require_once('Entity/user.php');
if(isset($_POST['username'])){
    $username = $_POST['username'];
}
if(isset($_POST['email'])){
    $email = $_POST["email"];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}
if(isset($_POST['address'])){
    $address = $_POST['address'];
}
if(isset($_POST['houseNumber'])){
    $houseNumber = $_POST['houseNumber'];
}
if(isset($_POST['cp'])){
    $cp = $_POST['cp'];
}
if(isset($_POST['city'])){
    $city = $_POST['city'];
}
if(isset($_POST['name'])){
    $name = $_POST['name'];
}
if(isset($_POST['lastName'])){
    $lastName = $_POST['lastName'];
}
if(isset($_POST['maidenName'])){
    $maidenName = $_POST['maidenName'];
}
user::createUser($username,$email,$password,$address,$houseNumber,$cp,$city,$name,$lastName,$maidenName);
exit;
    