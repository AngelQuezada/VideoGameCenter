<?php
/*
* Connection Class 
*/
class sqlConnection
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "videogamecenter";
    private $connection;

    public function __construct(){
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if(mysqli_connect_error()){
            printf("There was an error to connect to the Database: %d", mysqli_connect_error());
            exit;
        }else{
        }
    }
    public function queryBuilder($query){
        // var_dump($query);
        // die;
        $r=mysqli_query($this->connection, $query);
        if (!$r)
        {
            var_dump(mysqli_error_list($this->connection));
            die;
        }
        return $r;
    }
    public function queryLogin($query){
        //var_dump($query);
        $r=mysqli_query($this->connection, $query);
        if(!$r){
            return $r;
        }
        $row_count = mysqli_num_rows($r);
        return $row_count;
    }
    public function getId($query){
        $data = $this->queryBuilder($query);
       
        while($row = mysqli_fetch_array($data)){
            $id = $row['id'];
         }
         return $id;
    }
    public function closeConnection(){
        mysqli_close($this->connection);
    }
}





