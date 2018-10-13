<?php
require_once('include/connection.php');

class console{
    private $console_name;

    function __construct($console_name){
        $this->console_name=$console_name;
    }
    //Obtener todas las consolas
    public function consoles(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM console");
        $db->closeConnection();
        unset($db);
        return $data;
    }
    //Obtener cantidad de consolas
    public function quantityConsoles(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) FROM console");
        $db->closeConnection();
        unset($db);
        return $data[0];
    }
    //Dar de alta una nueva consola
    public static function createConsole($console_name){
        $db = new sqlConnection();
        $sql = 'INSERT INTO console';
        $sql .= " VALUES(null,'".$console_name."')";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
    }
}