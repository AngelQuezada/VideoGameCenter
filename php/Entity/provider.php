<?php
require_once('include/connection.php');

class provider{
    private $company_name;
    private $RFC;
    private $address;

    function __construct($company_name,$RFC,$address){
        $this->company_name=$company_name;
        $this->RFC=$RFC;
        $this->address=$address;
    }
    //Obtener todos los proveedores
    public function providers(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM provider");
        $db->closeConnection();
        unset($db);
        return $data;
    }
    //Obtener cantidad de proveedores
    public function quantityProviders(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) FROM provider");
        $db->closeConnection();
        unset($db);
        return $data[0];
    }
    //Dar de alta un nuevo proveedor
    public static function createProvider($company_name,$RFC,$address){
        $db = new sqlConnection();
        $sql = 'INSERT INTO provider';
        $sql .= " VALUES(null,'".$company_name."','".$RFC."','".$address."')";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
    }
}