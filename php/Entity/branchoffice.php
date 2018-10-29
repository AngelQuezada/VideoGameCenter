<?php
require_once('connection.php');

class branchoffice{
    private $branchoffice_name;
    private $address;

    function __construct(){
        require_once('connection.php');
    }
    //Obtener todas las sucursales
    public function branchOffices(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM branchoffice");
        $db->closeConnection();
        unset($db);
        return $data;
    }
    //Obtener cantidad de sucursales
    public function quantityBranchOffices(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) as total FROM branchoffice");
        $info = mysqli_fetch_assoc($data);
        $db->closeConnection();
        unset($db);
        return $info['total'];
    }
    //Dar de alta una nueva sucursal
    public static function createBranchOffice($branchoffice_name,$address){
        $db = new sqlConnection();
        $sql = 'INSERT INTO branchoffice';
        $sql .= " VALUES(null,'".$branchoffice_name."','".$address."');";
        $result = $db->queryBuilder($sql);
        echo "<script>alert('BO has been created successfuly!');</script>";
        $db->closeConnection();
        unset($db);
        header("Location: http://localhost/VideoGameCenter/src/pages/manage-bo.php");
    }
}