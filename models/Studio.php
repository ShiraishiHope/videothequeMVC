<?php
class Studio extends Model implements Template{

    public function __construct()
    {
        $this->table = "production";
        $this->getConnection();
    }

    public function randomId($idMin,$idMax){
        $id = mt_rand($idMin, $idMax);
        return $id;
    }
    /**
     * Return a production studio randomly
     * 
     * @param $id
     * @return void
     */
    //to fix, look for the max id instead of 7
    public function randomStudio(){
        //to fix: show three different studios
        $sql = "SELECT * FROM ". $this->table . " LIMIT 3";
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllStudio(){
        $sql = "SELECT * FROM ". $this->table.;
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchALL();
    }
}