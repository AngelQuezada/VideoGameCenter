<?php
require_once('Entity/branchoffice.php');

if(isset($_POST['branchOfficeName'])){
    $bOfficeName = $_POST['branchOfficeName'];
}
if(isset($_POST['address'])){
    $address = $_POST['address'];
}
branchOffice::createBranchOffice($bOfficeName,$address);
exit;