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

    /**
     * database initialisation
     * 
     * @return void
     */
    public function getConnection(){
        //cancel previous connection
        $this->conn = null;

        //try to connect to the base
        try{
            $this->conn = new PDO('mysql:host='.$this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            } catch (PDOException $exception) {
                echo 'Error: '.$exception->getMessage();
            }
    }

    /**
     * Method to fetch everything in a table
     * @return void
     */
    public function getAll(){
        $sql = "SELECT * FROM ". $this->table;
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchALL();
    }
    /**
     * Method to fetch an element of a table based on an idea
     * @return void
     */
    public function getOne(){
        $sql = "SELECT * FROM ". $this->table . " WHERE id =" . $this->id;
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
}