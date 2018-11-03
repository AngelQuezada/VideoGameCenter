<?php
session_start();
if($_SESSION["id_user"]==null){
    header("Location: http://localhost/VideoGameCenter/login-user.html");
    exit();
}