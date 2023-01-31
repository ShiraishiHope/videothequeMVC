<?php
class Series extends Model implements Template{

    public function __construct()
    {
        $this->table = "anime";
        $this->getConnection();
    }

    public function randomId($idMin,$idMax){
        $id = mt_rand($idMin, $idMax);
        return $id;
    }
    /**
     * Return an anime series randomly
     * 
     * @param $id
     * @return void
     */
    public function randomSeries(){
        
        $sql = "SELECT * FROM ". $this->table . " LIMIT 3";
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getAllSeries(){
        $sql = "SELECT * FROM ". $this->table. " WHERE id >5";
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchALL();
    }
}