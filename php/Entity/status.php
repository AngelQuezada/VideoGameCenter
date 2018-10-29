<?php
require_once('connection.php');

class status{
    private $id_ticket;
    private $date_ticket;
    private $status;
    
    function __construct(){
        require_once('connection.php');
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
    public function quantityStatus(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) as total FROM status");
        $info = mysqli_fetch_assoc($data);
        $db->closeConnection();
        unset($db);
        return $info['total'];
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