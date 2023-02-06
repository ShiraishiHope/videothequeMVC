<?php

namespace App\Controllers;
use App\Models\AnimeModel;
use App\Models\ProductionModel;
class MainController extends Controller
{
    public function index(){
        //On instancie le modèle correspondant à la table 'anime'
        $animeModel = new AnimeModel;

        //On va chercher tout les series animes
        $series = $animeModel->findBy(['type' => 'Series']);

        //On va chercher tout les series animes
        $movies = $animeModel->findBy(['type' => 'Movie']);

        //On va chercher les studios de production
        $productionModel = new ProductionModel;
        $studios = $productionModel->findAll();

        //On génère la vue
        $this->render('main/index', compact('series', 'movies', 'studios'));

    }
}