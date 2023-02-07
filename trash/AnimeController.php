<?php
/*
namespace App\trash;
use App\Controllers\Controller;
use App\Models\AnimeModel;
use App\Models\ProductionModel;

class AnimeController extends Controller
{
    /**
     * Cette méthode affichera une page listant tout les animes de la base de données
     * @return void
     */
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
        $this->render('anime/index', compact('series', 'movies', 'studios'));

    }

    public function detail(int $id){
       //on instancie le modèle
        $animeModel = new AnimeModel;

        //on cherche un anime
        $anime = $animeModel->find($id);

        //On envoie à la vue
        $this->render('anime/detail', compact('anime'));

    }

    public function list(string $category){

        if (strtolower($category) ==="series")
        {
            //on instancie le modèle
            $animeModel = new AnimeModel;

            //on cherche un anime
            $data = $animeModel->findBy(['type' => 'Series']);

            //On envoie à la vue
            $this->render('anime/list', compact('data'));
        } else if (strtolower($category) ==="movies")
        {
            //on instancie le modèle
            $animeModel = new AnimeModel;

            //on cherche un anime
            $data = $animeModel->findBy(['type' => 'Movie']);

            //On envoie à la vue
            $this->render('anime/list', compact('data'));
        } else if (strtolower($category) ==="studios")
        {
            //on instancie le modèle
            $productionModel = new ProductionModel;
            $data = $productionModel->findAll();
            $studio=true;

            //On envoie à la vue
            $this->render('anime/list', compact('data','studio'));
        }


    }

}*/