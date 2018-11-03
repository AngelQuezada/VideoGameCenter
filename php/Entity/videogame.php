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
     public function showVideogames(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM videogame");
        echo "<table class='table table-striped table-dark'>
              <thead>
              <tr class='bg-danger'>
              <th>id</th>
              <th>Thumbnail</th>
              <th>Company</th>
              <th>Console id</th>
              <th>Title</th>
              <th>Price</th>
              <th>Release Date</th>
              <th>Description</th>
              <th>Provider Name</th>
              </tr>
              </thead>";
        while($row = mysqli_fetch_array($data)){
            echo "<tbody>";
            echo "<tr>";
            echo "<td>".$row['id']. "</td>";
            echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row['thumbnail']). '" style="width: 70%"/></td>';
            echo "<td>".$row['company']. "</td>";
            echo "<td>".$row['console_id']. "</td>";
            echo "<td>".$row['title']. "</td>";
            echo "<td>".$row['price']. "</td>";
            echo "<td>".$row['release_date']. "</td>";
            echo "<td>".$row['description']. "</td>";
            echo "<td>".$row['provider_name']. "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        $db->closeConnection();
        unset($db);
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
    //Insertar videojuego
    public static function createVideogame($thumbnail,$company,$console_name,$title,$price,$release_date,$description,$provider_name){
        $db = new sqlConnection();
        $sql = 'INSERT INTO videogame';
        $sql .= " VALUES(null,'".$thumbnail."','".$company."','".$console_name."','".$title."','".$price."','".$release_date."','".$description."','".$provider_name."');";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
        header("Location: http://localhost/VideoGameCenter/src/pages/manage-videogame.php");
    }
}