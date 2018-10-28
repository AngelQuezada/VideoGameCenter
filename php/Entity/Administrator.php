<?php
require_once('connection.php');

class administrator{
    private $name;
    private $lastName;
    private $maidenName;
    private $username;
    private $password;
    private $RFC;
    private $birthdate;

    function __construct($name,$lastName,$maidenName,$username,$password,$RFC,$birthdate){
        $this->name=$name;
        $this->lastName=$name;
        $this->maidenName=$maidenName;
        $this->username=$username;
        $this->password=$password;
        $this->RFC=$RFC;
        $this->birthdate=$birthdate;
    }
    //Obtener cantidad de Administradores
    public function admins(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) FROM administrator");
        $db->closeConnection();
        unset($db);
        return $data[0];
    }
    //Dar de alta un nuevo admin
    public static function createAdmin($name,$lastName,$maidenName,$username,$password,$RFC,$birthdate){
        $db = new sqlConnection();
        $sql = 'INSERT INTO administrator';
        $sql .= " VALUES(null,'".$name."','".$lastName."','".$maidenName."','".$username."','".$password."','".$RFC."','".$birthdate."',0);";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
        echo '<script>location.href=index.php</script>';
    }
    public function activateAdmin($username){
        $db = new sqlConecction();
        $sql = "UPDATE SET is_admin = 1";
        $sql .= " WHERE username = '".$username."';";
        $data = $db->queryBuilder($sql);
        unset($db);
    }
    public static function loginAdmin($username,$password){
        $pass = SHA1($password);
        $db = new sqlConnection();
        $sql = 'SELECT * FROM administrator';
        $sql .= " WHERE username = '".$username."' AND password = '".$pass."'";
        $result = $db->queryLogin($sql);
        if($result == 1){
            session_start();
            $_SESSION["admin"]="si";
            echo "<script>alert('You are now Log in');</script>";
            header("Location: http://localhost/VideoGameCenter/src/pages/dashboard.php");
        }else{
            echo "<script>alert('User or password are invalid!');</script>";
            header("Location: http://localhost/VideoGameCenter/login-adm.html");
        }
    }
}