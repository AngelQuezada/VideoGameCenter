<?php
require_once('connection.php');
class status{
    private $id_ticket;
    private $date_ticket;
    private $status;
    
    function __construct(){
        require_once('connection.php');
    }
    //Obtener todos los registros de status
    public function showStatus(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT * FROM status");
        echo "<table class='table table-striped table-dark'>
                <thead>
                <tr class='bg-danger'>
                <th>id</th>
                <th>id Ticket</th>
                <th>Date Ticket</th>
                <th>Status</th>
                <th>Modify Status</th>
                </tr>
                </thead>";
        while($row = mysqli_fetch_array($data)){
            echo "<tbody>";
            echo '<form action="../../php/updateStatus" method="POST" id="formUpdateStatus">';
            echo "<tr>";
            echo '<td id="id" name="id"><input type="hidden" name="id" value="'.$row['id'].'">'.$row['id'].'</td>';
            echo "<td>".$row['id_ticket']. "</td>";
            echo "<td>".$row['date_ticket']. "</td>";
            echo '<td id="status" name="status"><select class="custom-select mr-sm-2" id="status" name="status"><option selected>'.$row['status'].'</option><option value="Procesar">Procesar</option><option value="Enviado">Enviado</option><option value="Recibido">Recibido</option></select></td>';
            echo '<td><button type="submit" class="btn btn-outline-warning">Save</button></td>';
            echo "</tr>";
            echo "</form>";
        }
        echo "</tbody>";
        echo "</table>";
        $db->closeConnection();
        unset($db);
    }
    //Actualizar Status
    public function updateStatus($id,$status){
        $db = new sqlConnection();
        $sql = 'UPDATE status';
        $sql .= " SET status = '".$status."' WHERE id = '".$id."'";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
        header("Location: http://localhost/VideoGameCenter/src/pages/manage-status.php");
    }
    //Obtener cantidad de status
    public function quantityStatus(){
        $db = new sqlConnection();
        $data = $db->queryBuilder("SELECT COUNT(*) as total FROM status");
        $info = mysqli_fetch_assoc($data);
        $db->closeConnection();
        unset($db);
        return $info['total'];
    }
    //Dar de alta un nuevo status
    public function createStatus($id_ticket,$date_ticket,$status){
        $db = new sqlConnection();
        $sql = 'INSERT INTO status';
        $sql .= " VALUES(null,'".$id_ticket."','".$date_ticket."','".$status."')";
        $result = $db->queryBuilder($sql);
        $db->closeConnection();
        unset($db);
    }
}