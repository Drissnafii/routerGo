<?php 
include __DIR__."/controllers.php";
// include_once __DIR__."/../models/ArticleModels.php";
include_once __DIR__."/../models/categoryModels.php";
// include __DIR__."/../core/database.php";
class ArticlsControllers{
    private $model;
    public function __construct(){
        $this->model=new ArticleModels();
    }
    public function index($page){
      if(($page!=null))
        $articls= $this->model->getAll($page['page']);
    else {
        $page=1;
        $articls= $this->model->getAll($page);
    }
       
        require __DIR__ . "/../../app/views/articls.php";

    }
    
    public function addArticls($request){
        $articls= $this->model->addArticls($request);
        
        $this->index(0);
        require __DIR__ . "/../views/articls.php";

    }
    public function formulaireArticle($request){
        $categorie=new categoryModels();
        $categories=$categorie->getSpecificCategory($request);
        $categorys=$categorie->getAll();
        $articls= $this->model->formulaireArticle($request);
        require __DIR__ . "/../../app/views/updateFormulaire.php";

    }
    public function updateArticle($request){
        $this->model->updateArticle($request);
        // $articls= $this->model->getAll();
        $page=1;
        $articls= $this->model->getAll($page);
        require __DIR__ . "/../../app/views/articls.php";

    }
    public function deleteArticls($request){
    //   print_r($request);
        $this->model->deleteArticls($request);
        // $articls= $this->model->getAll();
       
        $page=1;
        $articls= $this->model->getAll($page);
    
        require __DIR__ . "/../../app/views/articls.php";

    }

    
}
?>