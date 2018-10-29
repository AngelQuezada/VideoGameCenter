<?php
require_once('connection.php');

class videogame{
    private $thumbnail;
    private $company;
    private $console_name;
    private $title;
    private $price;
    private $release_date;
    private $description;
    private $provider_name;

    function __construct(){
        require_once('connection.php');
    }
     //Obtener todos los videojuegos
     public function videogames(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM videogame");
        $db->closeConnection();
        unset($db);
        return $data;
    }
    //Obtener cantidad de videojuegs
    public function quantityVideogames(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) as total FROM videogame");
        $info = mysqli_fetch_assoc($data);
        $db->closeConnection();
        unset($db);
        return $info['total'];
    }
     //Obtener todos los videojuegos por categoria
     public static function videogame($console_name){
        $db = new sqlConnection();
        $sql = 'SELECT * FROM videogame';
        $sql .= " WHERE console_name = '".$console_name."'";
        $data = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
        return $data;
    }
    public static function createVideogame($thumbnail,$company,$console_name,$title,$price,$release_date,$description,$provider_name){
        $db = new sqlConnection();
        $sql = 'INSERT INTO videogame';
        $sql .= " VALUES(null,'".$thumbnail."','".$company."','".$console_name."','".$title."','".$price."','".$release_date."','".$description."','".$provider_name."');";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
    }
}