<?php
class Media extends Controller
{
    /**
     * Method to display list of medias
     * @return void
     */
    public function index()
    {
        //instance of Anime model
        $this->loadModel("Anime");
        
        //store list of media in $media
        $media = $this->Anime->getAll();

        //send data to index view
        $this->render('index', compact('media'));
     
    }

    /**
     * Method to display an anime from their id
     * 
     * @param string $id
     * @return void
     */
    public function detail($id){

        //instance of Anime model
        $this->loadModel('Anime');

        //store anime in $anime
        $anime = $this->Anime->findById($id);

        //send data to view detail
        $this->render('detail', compact('anime'));
    }

        /**
     * Method to display everything from one type
     * 
     * @param string $id
     * @return void
     */
    public function list($id){

        //instance of Anime model
        $this->loadModel('Anime');

        //store anime in $anime
        $anime = $this->Anime->findById($id);

        //send data to view detail
        $this->render('detail', compact('anime'));
    }
}