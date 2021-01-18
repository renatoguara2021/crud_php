<?php

class Conn{

    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $dbname = "celke_php";
    public $port = 3306;
    public $connection = null;


    public function conectar(){


        try {
            
            $this->connection = new PDO('mysql:host='.$this->host . ';port='. $this->port . ';dbname=' . $this->dbname, $this->user, $this->password);

            return $this->connection;

        } catch (PDOException $ex) {
            
          echo "Erro ao Conectar ".$ex->getMessage();

          return false;

        }
    }
}



    
