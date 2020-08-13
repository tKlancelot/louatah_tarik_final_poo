<?php

class DefaultController
{

    private $voituresManager;

    public function __construct()
    {
        $this->voituresManager = new VoituresManager();
    }

    public function home(){
        $data = $this->voituresManager->count();
        $color = $this->voituresManager->getColor($data);
        $voitures = $this->voituresManager->selectAll();
        require ('view/home.php');
    }

    public function orderByMarqueAsc(){
        $data = $this->voituresManager->count();
        $voitures = $this->voituresManager->orderBy();
        $color = $this->voituresManager->getColor($data);
        require ('view/home.php');
    }

    public function orderByMarqueDesc(){
        $data = $this->voituresManager->count();
        $color = $this->voituresManager->getColor($data);
        $voitures = $this->voituresManager->orderByDesc();
        require ('view/home.php');
    }

    public function orderByModeleAsc(){
        $data = $this->voituresManager->count();
        $voitures = $this->voituresManager->orderByModeleAsc();
        $color = $this->voituresManager->getColor($data);
        require ('view/home.php');
    }

    public function orderByModeleDesc(){
        $data = $this->voituresManager->count();
        $color = $this->voituresManager->getColor($data);
        $voitures = $this->voituresManager->orderByModeleDesc();
        require ('view/home.php');
    }
}