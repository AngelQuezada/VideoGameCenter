<?php
require_once('include/connection.php');
class User 
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
         this.$username=$username;
         this.$email=$email;
         this.$password=$password;
         this.$address=$address;
         this.$houseNumber=$houseNumber;
         this.$cp=$cp;
         this.$city=$city;
         this.$name=$name;
         this.$lastName=$lastName;
         this.$maidenName=$maidenName;
    } 
    public function users(){    
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) FROM user");
        $db->closeConnection();
        unset($db);
        return $data[0];
    }
    public static function createUser($username,$email,$password,$address,$houseNumber,$cp,$city,$name,$lastName,$maidenName){
        $pass = SHA1($password);
        $db = new sqlConnection();
        $sql =  'INSERT INTO user';
        $sql .= " VALUES(null,'".$username."','".$email."','".$pass."','".$address."','".$houseNumber."','".$cp."','".$city."','".$name."','".$lastName."','".$maidenName."');";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
        echo "<script> location.href=index.php'</script>";
    }
    public static function searchUser($email){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM user WHERE email='".$email."'");
        $db->closeConnection();
        unset($db);
        return isset($data[0]);
    }
}