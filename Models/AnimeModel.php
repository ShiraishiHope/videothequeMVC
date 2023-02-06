<?php

namespace App\Models;

class AnimeModel extends Model
{
    protected $id;
    protected $rating;
    protected $name;
    protected $synopsis;
    protected $type;
    protected $releaseDate;

    public function __construct()
    {
        $this->table = 'anime';

    }

    /**
     * Récupére tout les animes fait par un studio de production
     * @param string $name
     * @return mixed
     */
    public function findAllByStudio(string $name)
    {
        return $this->queryFunc("SELECT * FROM {$this->table} JOIN production ON production.animeId = {$this->table}.id WHERE production.name = ?", [$name])->fetchAll();
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
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
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
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * @param mixed $synopsis
     */
    public function setSynopsis($synopsis)

    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param mixed $releaseDate
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

}