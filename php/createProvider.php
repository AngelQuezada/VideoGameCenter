<?php
require_once('Entity/provider.php');

if(isset($_POST['companyName'])){
    $companyName = $_POST['companyName'];
}
if(isset($_POST['RFC'])){
    $RFC = $_POST['RFC'];
}
if(isset($_POST['address'])){
    $address = $_POST['address'];
}
provider::createProvider($companyName,$RFC,$address);
exit;