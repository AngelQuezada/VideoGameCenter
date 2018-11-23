<?php

require_once('Entity/user.php');
if(isset($_POST['email'])){
    $email = $_POST["email"];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}

user::updatePassword($email,$password);
exit;