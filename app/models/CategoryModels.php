<?php 
require_once __DIR__."/../core/Database.php";

class CategoryModels{
private $model="categories";
private $pdo;
public function __construct(){
    $this->pdo=Database::connect();
   
}
public function getAll(){
 $stmt=$this->pdo->prepare("SELECT * FROM $this->model");
 $stmt->execute();
 return $stmt->fetchAll(PDO::FETCH_ASSOC);

}
public function getSpecificCategory($request){
    $stmt=$this->pdo->prepare("SELECT categories.id as category_id,categories.name FROM $this->model 
    INNER JOIN articles on categories.id=articles.category_id where articles.id =?
    ");
    $stmt->execute([$request['id']]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
   
   }

}
?>