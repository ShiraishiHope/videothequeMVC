<?php
class Media extends Controller
{
    public function index()
    {
        $this->loadModel("Anime");
        $media = $this->Anime->getAll();

        $this->render('index', compact('media'));
     
    }

    public function detail($id){
        $this->loadModel('Anime');
        $anime = $this->Anime->findById($id);

        $this->render('detail', compact('anime'));
    }
}