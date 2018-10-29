<?php
require_once('connection.php');

class category{
    private $category_name;

    function __construct($category_name){
        require_once('connection.php');
        $this->category_name = $category_name;
    }
    //Obtener todas las categorias
    public function categories(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM category");
        $db->closeConnection();
        unset($db);
        return $data;
    }
    //Obtener cantidad de categorias
    public function quantityCategories(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) as total FROM category");
        $info = mysqli_fetch_assoc($data);
        $db->closeConnection();
        unset($db);
        return $info['total'];
    }
    //Dar de alta nueva categoria
    public static function createCategory($category_name){
        $db = new sqlConnection();
        $sql = 'INSERT INTO category';
        $sql .= " VALUES(null,'".$category_name."');";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
    }
}