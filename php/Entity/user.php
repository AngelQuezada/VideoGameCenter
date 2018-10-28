<?php
require_once('connection.php');
class user 
{
    private $username;
    private $email;
    private $password;
    private $address;
    private $houseNumber;
    private $cp;
    private $city;
    private $name;
    private $lastName;
    private $maidenName;

    public function __construct(){
        //$conn = "../include/connection.php";
        require_once('connection.php');
    }
    //Obtener cantidad de usuarios registrados
    public static function users(){
        try{
            $db = new sqlConnection();
            $data = $db->queryBuilder("SELECT COUNT(*) as total FROM user");
            $info=mysqli_fetch_assoc($data);
            $db->closeConnection();
            unset($db);
            return $info['total'];
        } catch(Excepcion $e){
            $error = $e->getMessage();
        }
       
    }
    //Buscar un usuario por  correo registrado
    public static function searchUserByEmail($email){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM user WHERE email='".$email."'");
        $db->closeConnection();
        unset($db);
        return isset($data[0]);
    }
    //Actualiza Password
    public static function updatePassword($email,$password){
        var_dump($email);
        var_dump($password);
        $pass = SHA1($password);
        $db = new sqlConnection();
        $sql = 'UPDATE user';
        $sql .= " SET password = '".$pass."' WHERE email = '".$email."'";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
    }
    //Registrar un nuevo Usuario
    public static function createUser($username,$email,$password,$address,$houseNumber,$cp,$city,$name,$lastName,$maidenName){
        $pass = SHA1($password);
        $db = new sqlConnection();
        $sql =  'INSERT INTO user';
        $sql .= " VALUES(null,'".$username."','".$email."','".$pass."','".$address."','".$houseNumber."','".$cp."','".$city."','".$name."','".$lastName."','".$maidenName."');";
        $result = $db->queryBuilder($sql);
        echo "<script>alert('User has been created successfuly!');</script>";
        $db->closeConnection();
        unset($db);
    }
    //Logear Usuario
    public static function loginUser($email,$password){
        $pass = SHA1($password);
        $db = new sqlConnection();
        $sql = 'SELECT * FROM user';
        $sql .= " WHERE email = '".$email."' AND password = '".$pass."'";
        $result = $db->queryLogin($sql);
        if($result == 1){
            session_start();
            $_SESSION["autenticado"]="si";
            echo '<script type="text/javascript">alert("You are now Log in");';
            header("Location: http://localhost/VideoGameCenter/index.php");
        }else{
            echo '<script type="text/javascript">alert("Email or password are invalid!");</script>';
            header("Location: http://localhost/VideoGameCenter/login-user.html");
        }
    }
}