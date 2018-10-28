<?php
session_start();
if($_SESSION["autenticado"]!="si"){
    header("Location: http://localhost/VideoGameCenter/login-user.html");
    exit();
}