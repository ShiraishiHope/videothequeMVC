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