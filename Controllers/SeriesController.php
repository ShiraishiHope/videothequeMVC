<?php

namespace App\Controllers;
use App\Models\AnimeModel;

class SeriesController extends Controller
{
    public function detail(int $id){
        //on instancie le modèle
        $seriesModel = new AnimeModel;

        //on cherche un anime
        $series = $seriesModel->find($id);

        //On envoie à la vue
        $this->render('series/detail', compact('series'));

    }

    public function list(){

            //on instancie le modèle
            $seriesModel = new AnimeModel;

            //on cherche un anime
            $series = $seriesModel->findBy(['type' => 'Series']);

            //On envoie à la vue
            $this->render('series/list', compact('series'));



    }
}