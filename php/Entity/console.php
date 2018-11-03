<?php
require_once('connection.php');

class console{
    private $console_name;

    function __construct(){
        require_once('connection.php');
    }
    //Obtener todas las consolas
    public function showConsoles(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM console");
        echo "<table class='table table-striped table-dark'>
                <thead>
                <tr class='bg-danger'>
                <th>id</th>
                <th>Console Name</th>
                </tr>
                </thead>";
        while($row = mysqli_fetch_array($data)){
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" .$row['id']. "</td>";
            echo "<td>" .$row['console_name']. "</td>";
            echo "</tr>";
        }
        echo "</body>";
        echo "</table>";
        $db->closeConnection();
        unset($db);
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