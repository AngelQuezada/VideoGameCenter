<?php
require_once('connection.php');

class category{
    private $category_name;

    function __construct(){
        require_once('connection.php');
    }
    //Obtener todas las categorias
    public function showCategories(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM category");
        echo "<table class='table table-striped table-dark'>
                <thead>
                <tr class='bg-danger'>
                <th>id</th>
                <th>Category Name</th>
                </tr>
                </thead>";
        while($row = mysqli_fetch_array($data)){
            echo "<tbody>";
            echo "<tr>";
            echo "<td>".$row['id']. "</td>";
            echo "<td>".$row['category_name']. "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        $db->closeConnection();
        unset($db);
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