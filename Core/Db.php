<?php

namespace App\Core;

//importe PDO
use PDO;
use PDOException;

class Db extends PDO
{
    // Instance unique de la classe
    private static $instance;

    //information de connexion
    private const DBHOST = 'localhost';
    private const DBUSER = 'John';
    private const DBPASS = 'Doe';
    private const DBNAME = 'videotheque';

    private function __construct()
    {
        //DSN connexion
        $_dsn = 'mysql:dbname='. self::DBNAME . ';host=' . self::DBHOST;

        //appel constructor PDO
        try{
            parent::__construct($_dsn, self::DBUSER, self::DBPASS);

            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public static function getInstance():self{
        if(self::$instance ===null){
            self::$instance = new self();
        }
        return self::$instance;
    }
}