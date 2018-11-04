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
    public static function createTicket($id_username,$videogame_name,$category_id,$console_id,$quantity,$price){
        $total = $price*$quantity+13.50;
        $timestamp = date("Y-m-d H:i:s");
        $db = new sqlConnection();
        $sql = 'INSERT INTO ticket';
        $sql .= " VALUES(null,'".$id_username."','".$videogame_name."','".$category_id."','".$console_id."','".$quantity."','".$price."','".$total."','".$timestamp."');";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
        $db = new sqlConnection();
        $sql2 = " SELECT id,date FROM ticket ORDER BY id DESC LIMIT 1";
        $data = $db->queryBuilder($sql2);
        while($row = mysqli_fetch_array($data)){
            $id_ticket = $row['id'];
            $date_ticket = $row['date'];
        }
        $db->closeConnection();
        unset($db);
        $db = new sqlConnection();
        session_start();
        $id=$_SESSION['id_user'];
        $sql3 = 'INSERT INTO status (id,id_ticket,id_user,date_ticket )';
        $sql3 .= " VALUES(null,'".$id_ticket."','".$id."','".$date_ticket."');";
        $result = $db->queryBuilder($sql3);
        echo '<script language="javascript">';
        echo 'window.alert("The purchase has been completed")';
        echo '</script>';
        header('Refresh:0; url=http://localhost/VideoGameCenter/index.php');
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
                <th>Videogame name</th>
                <th>Category id</th>
                <th>Console id</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Date</th>
                </tr>
                </thead>";
        while($row = mysqli_fetch_array($data)){
            echo "<tbody>";
            echo "<tr>";
            echo "<td>".$row['id']. "</td>";
            echo "<td>".$row['id_username']. "</td>";
            echo "<td>".$row['videogame_name']. "</td>";
            echo "<td>".$row['category_id']. "</td>";
            echo "<td>".$row['console_id']. "</td>";
            echo "<td>".$row['quantity']. "</td>";
            echo "<td>$".$row['price']. " MXN</td>";
            echo "<td>$".$row['total']. " MXN</td>";
            echo "<td>".$row['date']. "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        $db->closeConnection();
        unset($db);
    }
    //Mostrar ticket de sesion
    public static function showTicketOfUser(){
        $db = new sqlConnection();
        $id=$_SESSION['id_user'];
        $sql = 'SELECT videogame_name,quantity,price,total,date FROM ticket';
        $sql .= " WHERE id_username = '".$id."'";
        $data = $db->queryBuilder($sql);
        echo "<table class='table table-striped table-dark'>
                <thead>
                <tr class='bg-danger'>
                <th>videogame Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Date</th>
                </tr>
                </thead>";
        while($row = mysqli_fetch_array($data)){
            echo "<tbody>";
            echo "<tr>";
            echo "<td>".$row['videogame_name']. "</td>";
            echo "<td>".$row['quantity']. "</td>";
            echo "<td>$".$row['price']. " MXN</td>";
            echo "<td>$".$row['total']. " MXN</td>";
            echo "<td>".$row['date']. "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        $db->closeConnection();
        unset($db);
    }
}