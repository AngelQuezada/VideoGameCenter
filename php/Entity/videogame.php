<?php
require_once('include/connection.php');

class videogame{
    private $thumbnail;
    private $company;
    private $console_name;
    private $title;
    private $price;
    private $release_date;
    private $description;
    private $provider_name;

    function __construct($thumbnail,$company,$console_name,$title,$price,$release_date,$description,$provider_name){
        $this->thumbnail=$thumbnail;
        $this->company=$company;
        $this->console_name=$console_name;
        $this->title=$title;
        $this->price=$price;
        $this->release_date=$release_date;
        $this->description=$description;
        $this->provider_name=$provider_name;
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
        $data = $db->queryBuilder("SELECT COUNT(*) FROM videogame");
        $db->closeConnection();
        unset($db);
        return $data[0];
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