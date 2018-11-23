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

    function __construct(){
        require_once('connection.php');
    }
    //Obtener cantidad de Administradores
    public function admins(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) as total FROM administrator");
        $info = mysqli_fetch_assoc($data);
        $db->closeConnection();
        unset($db);
        return $info['total'];
    }
    public function showAdmins(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT id,username,is_admin FROM administrator");
        echo "<table class='table table-striped table-dark'>
                <thead>
                <tr class='bg-danger'>
                <th>id</th>
                <th>username</th>
                <th>is Admin</th>
                <th>Modify Admin</th>
                </tr>
                </thead>";
        while($row = mysqli_fetch_array($data)){
            echo "<tbody>";
            echo '<form action="../../php/delegateAdmin.php" method="POST" id="formDelegateAdmin">';
            echo "<tr>";
            echo '<td id="id" name="id"><input type="hidden" name="id" value="'.$row['id'].'">'.$row['id']. '</td>';
            echo "<td>".$row['username']. "</td>";
            echo '<td id="isAdmin" name="isAdmin"><select class="custom-select mr-sm-2" id="isAdmin" name="isAdmin"><option selected>'.$row['is_admin'].'</option><option value="1">1</option><option value="0">0</option></select></td>';
            echo '<td><button type="submit" class="btn btn-outline-warning">Save</button></td>';
            echo "</tr>";
            echo "</form>";
        }
        echo "</tbody>";
        echo "</table>";
        $db->closeConnection();
        unset($db);
    }
    //Dar de alta un nuevo admin
    public static function createAdmin($name,$lastName,$maidenName,$username,$password,$RFC,$birthdate){
        $db = new sqlConnection();
        $pass = SHA1($password);
        $sql = 'INSERT INTO administrator';
        $sql .= " VALUES(null,'".$name."','".$lastName."','".$maidenName."','".$username."','".$pass."','".$RFC."','".$birthdate."',0);";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
        echo '<script language="javascript">';
        echo 'window.alert("The Administrator has been created successfuly!")';
        echo '</script>';
        header("Refresh:0; url=http://localhost/VideoGameCenter/src/pages/manage-adm.php");
    }
    //Delegar un Admin
    public static function delegateAdmin($id,$isAdmin){
        $db = new sqlConnection();
        $sql = "UPDATE administrator SET is_admin = '".$isAdmin."'";
        $sql .= " WHERE id = '".$id."';";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
        echo '<script language="javascript">';
        echo 'window.alert("The Admin has been modified successfuly")';
        echo '</script>';
        header("Refresh:0; url=http://localhost/VideoGameCenter/src/pages/manage-adm.php");
    }
    //Logear Admin
    public static function loginAdmin($username,$password){
        $pass = SHA1($password);
        $db = new sqlConnection();
        $sql = 'SELECT * FROM administrator';
        $sql .= " WHERE username = '".$username."' AND password = '".$pass."'";
        $id;
        $data = $db->queryBuilder($sql);
        while($row = mysqli_fetch_array($data)){
           $id = $row['id'];
        }
        $result = $db->queryLogin($sql);
        if($result == 1){
            session_start();
            $_SESSION["id"]=$id;
            echo '<script language="javascript">';
            echo 'window.alert("Your are now Log in")';
            echo '</script>';
            header("Refresh:0; url=http://localhost/VideoGameCenter/src/pages/dashboard.php");
        }else{
            echo '<script language="javascript">';
            echo 'window.alert("User or Password are invalid!")';
            echo '</script>';
            header("Refresh:0; url=http://localhost/VideoGameCenter/login-adm.html");
        }
    }
}