<?php
require_once('connection.php');

class provider{
    private $company_name;
    private $RFC;
    private $address;

    function __construct(){
        require_once('connection.php');
    }
    //Obtener todos los proveedores
    public function showProviders(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM provider");
        echo "<table class='table table-striped table-dark'>
                <thead>
                    <tr class='bg-danger'>
                    <th>id</th>
                    <th>Company Name</th>
                    <th>RFC</th>
                    <th>Address</th>
                    </tr>
                </thead>";
        while($row = mysqli_fetch_array($data)){
            echo "<tbody>";
            echo "<tr>";
            echo "<td>".$row['id']. "</td>";
            echo "<td>".$row['company_name']. "</td>";
            echo "<td>".$row['RFC']. "</td>";
            echo "<td>".$row['address']. "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        $db->closeConnection();
        unset($db);
    }
    //Obtener cantidad de proveedores
    public function quantityProviders(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) as total FROM provider");
        $info = mysqli_fetch_assoc($data);
        $db->closeConnection();
        unset($db);
        return $info['total'];
    }
    //Dar de alta un nuevo proveedor
    public static function createProvider($company_name,$RFC,$address){
        $db = new sqlConnection();
        $sql = 'INSERT INTO provider';
        $sql .= " VALUES(null,'".$company_name."','".$RFC."','".$address."')";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
        header("Location: http://localhost/VideoGameCenter/src/pages/manage-provider.php");
    }
}