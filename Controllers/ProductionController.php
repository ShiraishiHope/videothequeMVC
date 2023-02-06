<?php

namespace App\Controllers;
use App\Models\ProductionModel;

class ProductionController extends Controller
{
    public function detail(int $id){
        //on instancie le modèle
        $productionModel = new ProductionModel;

        //on cherche un studio de production
        $production = $productionModel->find($id);

        //On envoie à la vue
        $this->render('production/detail', compact('production'));

    }

    public function list(){

        //on instancie le modèle
        $productionModel = new ProductionModel;

        //on cherche un studio de production
        $production = $productionModel->findUnique();

        //On envoie à la vue
        $this->render('production/list', compact('production'));



    }
}