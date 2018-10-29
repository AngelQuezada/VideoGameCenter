<?php
require_once("Entity/user.php");
if(isset($_POST["usernameOld"])){
    $oldUsername = $_POST["usernameOld"];
}
if(isset($_POST["newUsername"])){
    $newUsername = $_POST["newUsername"];
}
user::updateUsername($oldUsername,$newUsername);
exit;