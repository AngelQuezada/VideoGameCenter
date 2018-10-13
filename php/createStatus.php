<?php
require_once('Entity/status.php');

if(isset($_POST['idTicket'])){
    $idTicket = $_POST['idTicket'];
}
if(isset($_POST['dateTicket'])){
    $dateTicket = $_POST['dateTicket'];
}
if(isset($_POST['status'])){
    $status = $_POST['status'];
}
status::createStatus($idTicket,$dateTicket,$status);
exit;