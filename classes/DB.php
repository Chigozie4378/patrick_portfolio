<?php
class DB{
    protected $host = 'localhost';
    protected $server = 'root';
    protected $password = '';
    protected $dbname = 'portfolio';

    public function connect(){
        $conn = new mysqli($this->host,$this->server,$this->password,$this->dbname);
        if ($conn->connect_error){
            echo "Failed".$conn->connect_error;
        }
        return $conn;
    }

}
?>