<?php



require './Conn.php';


class Users{



    public $connect;

    public function listar(){

$conn = new Conn();

 $this->connect = $conn->conectar();

 $conn = new Conn();
        $this->connect = $conn->conectar();
        
        $query_users = "SELECT id, nome, email FROM users ORDER BY id DESC LIMIT 40";
        $result_users = $this->connect->prepare($query_users);
        $result_users->execute();
        return $result_users->fetchAll();
    }



    }
