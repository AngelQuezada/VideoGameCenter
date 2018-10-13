<?php
require_once('Entity/category.php');

if(isset($_POST['categoryName'])){
    $categoryName = $_POST['categoryName'];
}
category::createCategory($categoryName);
exit;