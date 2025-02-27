<?php
include_once __DIR__ . "/../core/Database.php";

class ArticleModels
{
    private $table = "articles";
    private $pdo;
    public function __construct()
    {

        $this->pdo = Database::connect();
    }
    public function getAll($page)
    {
        // if(isset($page)){
        $stmt = $this->pdo->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        $articls = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $nbreTotal = count($articls);
        $nbreParPage = 5;
        $pages = ceil($nbreTotal / $nbreParPage);
        // echo $pages;
        $debut = ($page - 1) * $nbreParPage;
        $stmt = $this->pdo->prepare("SELECT * FROM $this->table LIMIT $debut,$nbreParPage");
        $stmt->execute();
        return [$stmt->fetchAll(PDO::FETCH_ASSOC), $pages];
        // }
        // else {

        //     $stmt=$this->pdo->prepare("SELECT * FROM $this->table");
        //     $stmt->execute();
        //     $articls=$stmt->fetchAll(PDO::FETCH_ASSOC); 
        //     $nbreTotal=count($articls);
        //     $nbreParPage=ceil($nbreTotal/4);
        //     $debut=1;
        //     $stmt=$this->pdo->prepare("SELECT * FROM $this->table LIMIT $debut,$nbreParPage");
        //     $stmt->execute();
        //     return [$stmt->fetchAll(PDO::FETCH_ASSOC),$nbreParPage]; 
        // }

    }

    public function getAllById($page, $id)
    {
        // if(isset($page)){
        $stmt = $this->pdo->prepare("SELECT * FROM $this->table where id=?");
        $stmt->execute([$id]);
        $articls = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $nbreTotal = count($articls);
        $nbreParPage = 5;
        $pages = ceil($nbreTotal / $nbreParPage);
        // echo $pages;
        $debut = ($page - 1) * $nbreParPage;
        $stmt = $this->pdo->prepare("SELECT * FROM $this->table LIMIT $debut,$nbreParPage");
        $stmt->execute();
        return [$stmt->fetchAll(PDO::FETCH_ASSOC), $pages];
        // }
        // else {

        //     $stmt=$this->pdo->prepare("SELECT * FROM $this->table");
        //     $stmt->execute();
        //     $articls=$stmt->fetchAll(PDO::FETCH_ASSOC); 
        //     $nbreTotal=count($articls);
        //     $nbreParPage=ceil($nbreTotal/4);
        //     $debut=1;
        //     $stmt=$this->pdo->prepare("SELECT * FROM $this->table LIMIT $debut,$nbreParPage");
        //     $stmt->execute();
        //     return [$stmt->fetchAll(PDO::FETCH_ASSOC),$nbreParPage]; 
        // }
    }
    public function addArticls($request)
    {
        $stmt = $this->pdo->prepare("INSERT INTO $this->table(title,content,category_id) VALUES(?,?,?) ");
        $stmt->execute([$request["name"], $request["content"], $request["category_id"]]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function formulaireArticle($request)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM $this->table WHERE id=?");
        $stmt->execute([$request['id']]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function updateArticle($request)
    {
        $stmt = $this->pdo->prepare("UPDATE  $this->table set title=?,content=?,category_id=? WHERE id=?");
        $stmt->execute([$request['name'], $request['content'], $request['category_id'], $request['id']]);
    }
    public function deleteArticls($request)
    {
        $stmt = $this->pdo->prepare("delete from $this->table  WHERE id=?");
        $stmt->execute([$request['id']]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
