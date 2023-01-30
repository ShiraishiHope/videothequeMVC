<?php
abstract class Model{
    //database information
    private $host = "localhost";
    private $db_name = "videotheque";
    private $username = "John";
    private $password = "Doe";

    // connection information
    protected $conn;

    //request information
    public $table;
    public $id;

    public function getConnection(){
        $this->conn = null;

        try{
            $this->conn = new PDO('mysql:host='.$this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            } catch (PDOException $exception) {
                echo 'Error: '.$exception->getMessage();
            }
    }

    public function getAll(){
        $sql = "SELECT * FROM ". $this->table;
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchALL();
    }

    public function getOne(){
        $sql = "SELECT * FROM ". $this->table . " WHERE id =" . $this->id;
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
}