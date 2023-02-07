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
     * Récupère uniquement les studios de productions sans doublons
     * @return array
     */
    public function findUnique() {
        $query = $this->queryFunc("SELECT name, establishmentDate, image FROM ".$this->table." WHERE image IS NOT NULL GROUP BY name, establishmentDate, image");
        return $query->fetchAll();
    }

    public function findRandomUnique() {
        $query = $this->queryFunc("SELECT name, establishmentDate, image FROM ".$this->table." WHERE image IS NOT NULL GROUP BY name, establishmentDate, image ORDER BY RAND() LIMIT 3");
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