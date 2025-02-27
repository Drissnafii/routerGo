<?php 
include_once __DIR__."/../core/Database.php";
class UsersModels{
private $table="users";
private $db;
public function __construct(){
    $this->db=Database::connect();
    
}
public function getAll(){
  
}
public function verification($request) {
    $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE email = ?");
    $stmt->execute([$request['email']]);

    // Vérifier si un utilisateur a été trouvé
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        // Aucun utilisateur trouvé, retournez false ou une erreur appropriée
        return false;
    }

    // Vérification du mot de passe
    if (password_verify($request["password"], $user['password'])) {
        return $user;
    }

    return false; // Si le mot de passe est incorrect
}


public function add($request){
    $hashed_password=password_hash($request['password'],PASSWORD_BCRYPT);
    $stmt=$this->db->prepare("INSERT INTO $this->table (name,email,password) values (?,?,?)");
    $stmt->execute([$request['name'],$request['email'],$hashed_password]);


  
}
}
?>