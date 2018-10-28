<?php
require_once('Entity/administrator.php');
if(isset($_POST["username"])){
    $username = $_POST["username"];
}
if(isset($_POST["password"])){
    $password = $_POST["password"];
}
administrator::loginAdmin($username,$password);
exit;