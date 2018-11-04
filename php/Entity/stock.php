<?php
require_once('connection.php');

class stock{
    private $id_videogame;
    private $id_console;
    private $stock;

    function __construct(){
        require_once('connection.php');
    }
    //Obtener todas los stock
    public function showStock(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM stock");
        echo "<table class='table table-striped table-dark'>
                <thead>
                <tr class='bg-danger'>
                <th>id Videogame</th>
                <th>id Console</th>
                <th>Stock</th>
                <th>Modify Stock</th>
                </tr>
                </thead>";
        while($row = mysqli_fetch_array($data)){
            echo "<tbody>";
            echo '<form action="../../php/updateStock" method="POST" id="formUpdateStock">';
            echo "<tr>";
            echo '<td id="idVideogame" name="idVideogame"><input type="hidden" name="idVideogame" value="'.$row['id_videogame'].'">'.$row['id_videogame']. '</td>';
            echo "<td>".$row['id_console']. "</td>";
            echo '<td><input type="text" class="form-control" placeholder="Cant of Stock" name="stock" id="stock" value="'.$row['stock'].'"></td>';
            echo '<td><button type="submit" class="btn btn-outline-warning">Save</button></td>';
            echo "</tr>";
            echo "</form>";
        }
        echo "</tbody>";
        echo "</table>";
        $db->closeConnection();
        unset($db);
    }
    //Modificar Stock
    public function updateStock($id_videogame,$new_stock){
        $db = new sqlConnection();
        $sql = 'UPDATE stock';
        $sql .=" SET stock = '".$new_stock."' WHERE id_videogame = '".$id_videogame."'";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
        echo '<script language="javascript">';
        echo 'window.alert("The stock has been modified successfuly")';
        echo '</script>';
        header("Refresh:0; url=http://localhost/VideoGameCenter/src/pages/manage-stock.php");
    }
    //Obtener cantidad de stock
    public function quantityStock(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) as total FROM stock");
        $info = mysqli_fetch_assoc($data);
        $db->closeConnection();
        unset($db);
        return $info['total'];
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