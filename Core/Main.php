<?php

namespace App\Core;

use App\Controllers\MainController;

/**
 * Routeur principal
 */
class Main
{
    public function start(){

        // On récupère l'url
        $uri = $_SERVER['REQUEST_URI'];

        //On vérifie que l'uri n'est pas vide et se termine par un /
        if(!empty($uri) && $uri != '/' && $uri[-1] === "/"){
            // On enlève le "/" de fin
            $uri = substr($uri,0,-1);

            //On envoie un code de redirection permanente
            http_response_code(301);

            //On redirige vers l'URL sans /
            header('Location: '.$uri);
        }

        // On gère les paramètres d'URL
        // p=controleur/methode/paramètres
        //On sépare les paramètres dans un tableau
        $params = explode('/', $_GET['p']);
        if($params[0] !=''){
            //On a au moins un paramètre
            //On récupère le nom de controleur à instancier
            //NamespaceComplet\\Controllers\\NomControleur avec une majuscule
            $controller = '\\App\\Controllers\\'.ucfirst(array_shift($params)).'Controller';

            //On instancie le controleur
            $controller = new $controller();

            //On récupère le 2ème paramètre d'URL
            $action = (isset($params[0])) ? array_shift($params) : 'index';

            if(method_exists($controller, $action)){
                //Si il reste des paramètres, on les passe à la méthode
                (isset($params[0])) ? call_user_func_array([$controller,$action], $params): $controller->$action();
            } else{
                http_response_code(404);
                echo "Page not found";
            }

        } else {
            // On a aucun paramètre
            // On instancie le controlleur par default
            $controller = new MainController;

            //On appelle la méthode index
            $controller->index();
        }
    }
}