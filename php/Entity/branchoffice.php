<?php
require_once('include/connection.php');

class branchOffice{
    private $branchoffice_name;
    private $address;

    function __construct($branchoffice_name,$address){
        $this->branchoffice_name=$branchoffice_name;
        $this->address=$address;
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
        $data = $db->queryBuilder("SELECT COUNT(*) FROM branchoffice");
        $db->closeConnection();
        unset($db);
        return $data[0];
    }
    //Dar de alta una nueva sucursal
    public static function createBranchOffice($branchoffice_name,$address){
        $db = new sqlConnection();
        $sql = 'INSERT INTO branchoffice';
        $sql .= " VALUES(null,'".$branchoffice_name."','".$address."');";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
    }
}