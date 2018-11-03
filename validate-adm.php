<?php
session_start();
if($_SESSION["id"]==null){
    header("Location: http://localhost/VideoGameCenter/login-adm.html");
    exit();
}