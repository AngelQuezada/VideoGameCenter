<?php
require_once('include/connection.php');

class stock{
    private $id_videogame;
    private $id_console;
    private $stock;

    function __construct($id_videogame,$id_console,$stock){
        $this->id_videogame=$id_videogame;
        $this->id_console=$id_console;
        $this->stock=$stock;
    }
    //Obtener todas los stock
    public function stock(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM stock");
        $db->closeConnection();
        unset($db);
        return $data;
    }
    //Obtener cantidad de stock
    public function quantityStock(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) FROM stock");
        $db->closeConnection();
        unset($db);
        return $data[0];
    }
    //Dar de alta un producto en stock
    public static function createStock($id_videogame,$id_console,$stock){
        $db = new sqlConnection();
        $sql = 'INSERT INTO stock';
        $sql .= " VALUES('".$id_videogame."','".$id_console."','".$stock."')";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
    }

}