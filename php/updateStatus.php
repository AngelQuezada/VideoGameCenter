<?php
require_once('Entity/status.php');
if(isset($_POST['id'])){
    $id =  $_POST['id'];
}
if(isset($_POST['status'])){
    $status = $_POST['status'];
}
status::updateStatus($id,$status);
exit;