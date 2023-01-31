<?php

class Main extends Controller{


    
    public function index(){
    //instance of Anime model
    $this->loadModel("Series");
    
    //store series in $series
    $series = $this->Series->randomSeries();
    $this->loadModel("Movie");
    $movie = $this->Movie->randomMovie();
    $this->loadModel("Studio");
    $studio = $this->Studio->randomStudio();
    
    $this->render('index', compact('series', 'movie', 'studio'));
    }

}