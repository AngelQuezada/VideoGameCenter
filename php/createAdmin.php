<?php
require_once('Entity/administrator.php');
if(isset($_POST['name'])){
    $name = $_POST['name'];
}
if(isset($_POST['lastName'])){
    $lastName = $_POST['lastName'];
}
if(isset($_POST['maidenName'])){
    $maidenName = $_POST['maidenName'];
}
if(isset($_POST['username'])){
    $username = $_POST['username'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}
if(isset($_POST['RFC'])){
    $RFC = $_POST['RFC'];
}
if(isset($_POST['birthdate'])){
    $birthdate = $_POST['birthdate'];
}
administrator::createAdmin($name,$lastName,$maidenName,$username,$password,$RFC,$birthdate);
exit;