<?php
class Anime extends Model{

    public function __construct()
    {
        $this->table = "anime";
        $this->getConnection();
    }

    /**
     * Return anime based on its id
     * 
     * @param $id
     * @return void
     */
    public function findById(string $id){
        $sql = "SELECT * FROM ". $this->table . " WHERE id ='" . $id."'";
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}