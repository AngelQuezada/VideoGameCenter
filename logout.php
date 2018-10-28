<?php
session_start();
session_destroy();
header("Location: http://localhost/VideoGameCenter/login-user.html");
    exit();