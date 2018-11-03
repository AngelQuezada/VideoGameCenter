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
              <th>Category</th>
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
            echo "<td>".$row['category']. "</td>";
            echo "<td>".$row['description']. "</td>";
            echo "<td>".$row['provider_name']. "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        $db->closeConnection();
        unset($db);
    }
    //Cards videojuegos Principal
    public function cardVideogames(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM videogame LIMIT 3");
        echo '<form action="php/buyVideogame.php" method="POST" id="formCreateVideogame">';
        echo '<div class="row">';
        while($row = mysqli_fetch_array($data)){
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '<input type="hidden" name="id_user" value="'.$_SESSION['id_user'].'">';
            echo '<input type="hidden" name="console_id" value="'.$row['console_id'].'">';
            echo '<input type="hidden" name="title" value="'.$row['title'].'">';
            echo '<input type="hidden" name="category" value="'.$row['category'].'">';
            echo '<input type="hidden" name="price" value="'.$row['price'].'">';

            echo '<div class="col-sm-4">';
            echo '<div class="card" id='.$row['id'].' style="width:400px">';
            echo '<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($row['thumbnail']).'" style="width: 100%" >';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">'.$row['title'].'</h4>';
            echo '<p class="card-text">'.$row['description'].' Company: '.$row['company'].' Release Date: '.$row['release_date'].' Price: $'.$row['price'].'</p>';
            echo '<button class="btn btn-success" type="submit">Buy</button>';
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</form>";
    }
    //Cards videojuegos PC
    public function cardVideogamesPC(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT id,thumbnail,company,title,price,release_date,description FROM videogame WHERE console_id=10");
        echo '<div class="row">';
        while($row = mysqli_fetch_array($data)){
            echo "<div class= col-sm-4>";
            echo '<div class="card" id='.$row['id'].' style="width:400px">';
            echo '<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($row['thumbnail']).'" style="width: 100%" >';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">'.$row['title'].'</h4>';
            echo '<p class="card-text">'.$row['description'].' Company: '.$row['company'].' Release Date: '.$row['release_date'].' Price: $'.$row['price'].'</p>';
            echo '<a href="#"  class="btn btn-success">Buy</a>';
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    }
    //Cards videouegos XBOX ONE
    public function cardVideogamesXBXONE(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT id,thumbnail,company,title,price,release_date,description FROM videogame WHERE console_id=6");
        echo '<div class="row">';
        while($row = mysqli_fetch_array($data)){
            echo "<div class= col-sm-4>";
            echo '<div class="card" id='.$row['id'].' style="width:400px">';
            echo '<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($row['thumbnail']).'" style="width: 100%" >';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">'.$row['title'].'</h4>';
            echo '<p class="card-text">'.$row['description'].' Company: '.$row['company'].' Release Date: '.$row['release_date'].' Price: $'.$row['price'].'</p>';
            echo '<a href="#"  class="btn btn-success">Buy</a>';
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    }
    //Cards Nintendo Switch
    public function cardVideoGameNSwitch(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT id,thumbnail,company,title,price,release_date,description FROM videogame WHERE console_id=8");
        echo '<div class="row">';
        while($row = mysqli_fetch_array($data)){
            echo "<div class= col-sm-4>";
            echo '<div class="card" id='.$row['id'].' style="width:400px">';
            echo '<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($row['thumbnail']).'" style="width: 100%" >';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">'.$row['title'].'</h4>';
            echo '<p class="card-text">'.$row['description'].' Company: '.$row['company'].' Release Date: '.$row['release_date'].' Price: $'.$row['price'].'</p>';
            echo '<a href="#"  class="btn btn-success">Buy</a>';
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    }
    //Cards PS4
    public function cardVideoGamePS4(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT id,thumbnail,company,title,price,release_date,description FROM videogame WHERE console_id=7");
        echo '<div class="row">';
        while($row = mysqli_fetch_array($data)){
            echo "<div class= col-sm-4>";
            echo '<div class="card" id='.$row['id'].' style="width:400px">';
            echo '<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($row['thumbnail']).'" style="width: 100%" >';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">'.$row['title'].'</h4>';
            echo '<p class="card-text">'.$row['description'].' Company: '.$row['company'].' Release Date: '.$row['release_date'].' Price: $'.$row['price'].'</p>';
            echo '<a href="#"  class="btn btn-success">Buy</a>';
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
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
    public static function createVideogame($thumbnail,$company,$console_name,$title,$price,$release_date,$category,$description,$provider_name){
        $db = new sqlConnection();
        $sql = 'INSERT INTO videogame';
        $sql .= " VALUES(null,'".$thumbnail."','".$company."','".$console_name."','".$title."','".$price."','".$release_date."','".$category."','".$description."','".$provider_name."');";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
        header("Location: http://localhost/VideoGameCenter/src/pages/manage-videogame.php");
    }
}