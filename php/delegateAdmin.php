<?php
require_once('Entity/administrator.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];
}
if(isset($_POST['isAdmin'])){
    $isAdmin = $_POST['isAdmin'];
}
// var_dump($id);
// var_dump($isAdmin);
// die;
administrator::delegateAdmin($id,$isAdmin);
exit;