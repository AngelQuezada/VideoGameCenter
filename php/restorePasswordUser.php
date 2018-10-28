<?php
// define('DS', '../');
// require_once(DS.'Entity/user.php');
require_once('Entity/user.php');
if(isset($_POST['email'])){
    $email = $_POST["email"];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}
// var_dump($email);
// var_dump($password);
user::updatePassword($email,$password);
exit;