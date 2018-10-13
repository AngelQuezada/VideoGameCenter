<?php
require_once('Entity/console.php');

if(isset($_POST['consoleName'])){
    $consoleName = $_POST['consoleName'];
}
console::createConsole($consoleName);
exit;