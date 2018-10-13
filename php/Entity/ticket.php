<?php
require_once('include/connection.php');

class ticket{
    private $id_username;
    private $videogame_name;
    private $category_name;
    private $console_name;
    private $quantity;
    private $price;
    private $total;
    private $date;

    function __construct($id_username,$videogame_name,$category_name,$console_name,$quantity,$price,$total,$date){
        $this->id_username=$id_username;
        $this->videogame_name=$videogame_name;
        $this->category_name=$category_name;
        $this->console_name=$console_name;
        $this->quantity=$quantity;
        $this->price=$price;
        $this->total=$total;
        $this->date=$date;
    }
    //Dar de alta un ticket
    public static function createTicket($id_username,$videogame_name,$category_name,$console_name,$quantity,$price,$total,$date){
        $db = new sqlConnection();
        $sql = 'INSERT INTO ticket';
        $sql .= " VALUES(null,'".$id_username."','".$videogame_name."','".$category_name."','".$console_name."','".$quantity."','".$price."','".$total."','".$date."');";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
    }
}