<?php

namespace App\Controllers;

abstract class Controller
{
    public function render(string $file, array $data =[]){


        // On extrait le contenu de $data
        extract($data);

        //démarrage buffer de sortie
        ob_start();




        //On crée le chemin vers la vue
        require_once ROOT.'/Views/'.$file.'.php';

        $content = ob_get_clean();
        require_once ROOT.'/Views/default.php';
    }
}