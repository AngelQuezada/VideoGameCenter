<?php
require_once('connection.php');

class ticket{
    private $id_username;
    private $videogame_name;
    private $category_name;
    private $console_name;
    private $quantity;
    private $price;
    private $total;
    private $date;

    function __construct(){
        require_once('connection.php');
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
    //Mostrar ticket
    public static function showTickets(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM ticket");
        $info = mysqli_fetch_array($data);
        $db->closeConnection();
        unset($db);
        return $info;
    }
}