<?php
require_once('include/connection.php');
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

    function __construct($username,$email,$password,$address,$houseNumber,$cp,$city,$name,$lastName,$maidenName){
         $this->username=$username;
         $this->email=$email;
         $this->password=$password;
         $this->address=$address;
         $this->houseNumber=$houseNumber;
         $this->cp=$cp;
         $this->city=$city;
         $this->name=$name;
         $this->lastName=$lastName;
         $this->maidenName=$maidenName;
    }
    // //Verifica que solo admita peticiones AJAX
    // public static function reqAjax(){
    //     return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
    // }
    //Obtener cantidad de usuarios registrados
    public function users(){
        try{
            $db = new sqlConnection();
            $data = $db->queryBuilder("SELECT COUNT(*) FROM user");
            $db->closeConnection();
            unset($db);
            return $data[0];
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
            echo "<script>alert('You are now Log in');</script>";
            header("Location: http://localhost/VideoGameCenter/index.php");
        }else{
            echo "<script>alert('User or password are invalid!');</script>";
            header("Location: http://localhost/VideoGameCenter/login-user.html");
        }
    }
}