<?php

namespace App\Controllers;
use App\Models\AnimeModel;

class MovieController extends Controller
{
    public function detail(int $id){
        //on instancie le modèle
        $movieModel = new AnimeModel;

        //on cherche un anime
        $movie = $movieModel->find($id);

        //On envoie à la vue
        $this->render('movie/detail', compact('movie'));

    }

    public function list(){

            //on instancie le modèle
            $movieModel = new AnimeModel;

            //on cherche un anime
            $movie = $movieModel->findByRandom(['type' => 'Movie']);

            //On envoie à la vue
            $this->render('movie/list', compact('movie'));



    }
}