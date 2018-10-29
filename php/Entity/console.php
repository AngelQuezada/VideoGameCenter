<?php
require_once('connection.php');

class console{
    private $console_name;

    function __construct($console_name){
        require_once('connection.php');
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
        $data = $db->queryBuilder("SELECT COUNT(*) as total FROM console");
        $info = mysqli_fetch_assoc($data);
        $db->closeConnection();
        unset($db);
        return $info['total'];
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