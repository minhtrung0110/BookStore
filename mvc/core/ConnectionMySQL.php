<?php

class ConnectionMySQL{
        protected $connection;
        protected $servername="localhost";
        protected $username="root";
        protected $password="";
        protected $databasename="quanlybansach";

        function __construct(){
            $this->connection =new mysqli($this->servername,$this->username,$this->password,$this->databasename);
            $this->connection -> set_charset("utf8");
            //kiem tra ket noi
            if($this->connection->connect_error){
                var_dump($this->connection->connect_error);
                echo "\n Kết Nối DB thất bại";
                die();
}
        }

}

?>