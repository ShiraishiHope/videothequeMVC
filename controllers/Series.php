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
        $series = $this->Series->getAll();

        //send data to index view
        $this->render('index', compact('media'));
     
    }


        /**
     * Method to display everything from one type
     * 
     * 
     * @return void
     */
    public function list(){

        //instance of Anime model
        $this->loadModel('Series');

        //store anime in $anime
        $series = $this->Series->getAllSeries();

        //send data to view detail
        $this->render('list', compact('series'));
    }
}