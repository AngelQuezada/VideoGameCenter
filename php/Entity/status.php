<?php
require_once('include/connection.php');

class status{
    private $id_ticket;
    private $date_ticket;
    private $status;
    
    function __construct($id_ticket,$date_ticket,$status){
        $this->id_ticket=$id_ticket;
        $this->date_ticket=$date_ticket;
        $this->status=$status;
    }
    //Obtener todos los registros de status
    public function status(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM status");
        $db->closeConnection();
        unset($db);
        return $data;
    }
    //Obtener cantidad de status
    public function quantityStatuss(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) FROM status");
        $db->closeConnection();
        unset($db);
        return $data[0];
    }
    //Dar de alta un nuevo status
    public function createStatus($id_ticket,$date_ticket,$status){
        $db = new sqlConnection();
        $sql = 'INSERT INTO status';
        $sql .= " VALUES(null,'".$id_ticket."','".$date_ticket."','".$status."')";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
    }
}