<?php

namespace App;

class Autoloader
{
    static function register(){
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class){
        //On récupère le namespace complet dans $class et on retire la partie namespace
        $class = str_replace(__NAMESPACE__ . '\\', '', $class);

        //on remplace les \ par des /
        $class = str_replace('\\', '/', $class);

        $file = __DIR__ . '/' .$class . '.php';
        //vérification de l'existence du fichier
        if(file_exists($file)){
            require_once $file;
        }
    }
}