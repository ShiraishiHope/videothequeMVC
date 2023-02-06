<?php

namespace App\Models;
use App\Core\Db;

class Model extends Db
{
    //Table base de données
    protected $table;

    //Instance de Db
    private $db;

    public function findAll(){
        $query = $this->queryFunc('SELECT * FROM '.$this->table);
        return $query->fetchAll();
    }

    public function findBy(array $items){
        $keys =[];
        $values =[];

        //On boucle pour récupérer les clés/valeurs du tableau
        foreach($items as $key => $value){
            //SELECT $ FROM table where x = ?
            $keys[] = "$key = ?";
            $values[] = $value;
        }

        //On transforme le tableau "key" en chaine de caractères
        $list_keys = implode(' AND ', $keys);

        //On execute la requete
        return $this->queryFunc('SELECT * FROM '.$this->table.' WHERE '. $list_keys, $values)->fetchAll();
    }

    public function find(int $id){
        return $this->queryFunc("SELECT * FROM {$this->table} WHERE id = $id")->fetch();
    }

    public function create(Model $model){
        $keys =[];
        $inter = [];
        $values =[];

        //On boucle pour récupérer les clés/valeurs du tableau
        foreach($model as $key => $value){
            //INSERT INTO table (column1, column2,...) VALUES(?, ?,...)
            if($value != null && $key != 'db' && $key != 'table') {
                $keys[] = $key;
                $inter[] = "?";
                $values[] = $value;
            }
        }

        //On transforme le tableau "key" en chaine de caractères
        $list_keys = implode(', ', $keys);
        $list_inter = implode(', ', $inter);

        //On execute la requete
        return $this->queryFunc('INSERT INTO '.$this->table.' ('. $list_keys.') VALUES('.$list_inter.')',$values);
    }

    public function update(int $id, Model $model){
        $keys =[];
        $values =[];

        //On boucle pour récupérer les clés/valeurs du tableau
        foreach($model as $key => $value){
            //UPDATE table SET columnName = value WHERE id = ?
            if($value != null && $key != 'db' && $key != 'table') {
                $keys[] = "$key = ?";
                $values[] = $value;
            }
        }
        $values[] = $id;

        //On transforme le tableau "key" en chaine de caractères
        $list_keys = implode(', ', $keys);

        //On execute la requete
        return $this->queryFunc('UPDATE '.$this->table.' SET '. $list_keys.' WHERE id = ?',$values);
    }

    public function delete(int $id){
        return $this->queryFunc("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    }

    public function queryFunc(string $sql, array $attributs = null){
        //on récupère l'instance de Db
        $this->db = Db::getInstance();

        // On vérifie si on a des attributs
        if($attributs != null){
            //Requête préparée
            $query = $this->db->prepare($sql);
            $query->execute($attributs);
            return $query;
        }else {
            //Requête simple
            return $this->db->query($sql);
        }
    }

    public function hydrate($data){
        foreach($data as $key => $value){
            //On récupère le nom du setter correspondant à la key
            $setter = 'set'.ucfirst($key);

            //On vérifie si le setter exist
            if(method_exists($this,$setter)){
                //on appelle le setter
                $this->$setter($value);
            }
        }
        return $this;
    }
}