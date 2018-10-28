<?php
session_start();
if($_SESSION["admin"]!="si"){
    header("Location: http://localhost/VideoGameCenter/login-adm.html");
    exit();
}