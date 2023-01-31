<?php
class Movie extends Model implements Template{

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
     * Return an anime movie randomly
     * 
     * @param $id
     * @return void
     */
    public function randomMovie(){
        
        $sql = "SELECT * FROM ". $this->table . " WHERE id >5 Limit 3";
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllMovies(){
        $sql = "SELECT * FROM ". $this->table. " WHERE id >5";
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchALL();
    }
}