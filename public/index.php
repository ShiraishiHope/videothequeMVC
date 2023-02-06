<?php

use App\Autoloader;
use App\Core\Main;

// On définit une constante contenant le dossier racine du projet
define('ROOT', dirname(__DIR__));

//import de l'autoloader
require_once ROOT.'/Autoloader.php';
Autoloader::register();

//On instancie Main(routeur)
$app = new Main();

//On démarre l'application
$app->start();