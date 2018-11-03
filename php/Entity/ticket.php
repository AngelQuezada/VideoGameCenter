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
        echo "<table class='table table-striped table-dark'>
                <thead>
                <tr class='bg-danger'>
                <th>id</th>
                <th>id Username</th>
                <th>videogame name</th>
                <th>category name</th>
                <th>console name</th>
                <th>quantity</th>
                <th>price</th>
                <th>total</th>
                <th>date</th>
                </tr>
                </thead>";
        while($row = mysqli_fetch_array($data)){
            echo "<tbody>";
            echo "<tr>";
            echo "<td>".$row['id']. "</td>";
            echo "<td>".$row['id_username']. "</td>";
            echo "<td>".$row['videogame_name']. "</td>";
            echo "<td>".$row['category_name']. "</td>";
            echo "<td>".$row['console_name']. "</td>";
            echo "<td>".$row['quantity']. "</td>";
            echo "<td>".$row['price']. "</td>";
            echo "<td>".$row['total']. "</td>";
            echo "<td>".$row['date']. "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        $db->closeConnection();
        unset($db);
    }
}