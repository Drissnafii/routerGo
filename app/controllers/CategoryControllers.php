<?php 
include_once __DIR__."/../models/CategoryModels.php";
class CategoryControllers{
    private $models;
    public function __construct(){
        $this->models=new CategoryModels();
    }
    public function getCategory(){
    $categorys=$this->models->getAll();
        require_once __DIR__."/../views/formulaire.php";
    }
    

}
?>