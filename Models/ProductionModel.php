<?php

namespace App\Models;

class ProductionModel extends Model
{
    protected $id;
    protected $animeId;
    protected $name;
    protected $establishmentDate;

    public function __construct()
    {
        $this->table = 'production';

    }

    /**
     * Récupère uniquement les studios de productions sans doublons et avec une image
     * @return array
     */
    public function findUnique() {
        $query = $this->queryFunc("SELECT id, name, establishmentDate, image FROM ".$this->table." WHERE image IS NOT NULL GROUP BY id, name, establishmentDate, image");
        return $query->fetchAll();
    }
    /**
     * Récupère aléatoirement les studios de productions sans doublons et avec une image
     * @return array
     */
    public function findRandomUnique() {
        $query = $this->queryFunc("SELECT id, name, establishmentDate, image FROM ".$this->table." WHERE image IS NOT NULL GROUP BY id, name, establishmentDate, image ORDER BY RAND() LIMIT 3");
        return $query->fetchAll();
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEstablishmentDate()
    {
        return $this->establishmentDate;
    }

    /**
     * @param mixed $establishmentDate
     */
    public function setEstablishmentDate($establishmentDate): void
    {
        $this->establishmentDate = $establishmentDate;
    }

}