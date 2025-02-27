<?php 
// include __DIR__."/../models/UsersModels.php";
include_once "../app/models/UsersModels.php";
include __DIR__."/../models/ArticleModels.php";
include __DIR__."/../core/Session.php";

class userControllers
{
private $model;
private $session;
public function __construct(){
    $this->model=new UsersModels();
    $this->session=new Session();

}
public function loginForm(){
    require_once __DIR__."/../views/login.php";
}

public function login($request){
    session_start();
    $user=$this->model->verification($request);
    print_r($user);
    if((!$user))
    {
    require_once __DIR__."/../views/popup.php";

    }
    
else {
    
    $this->session->donnes($request,$user);
    if ($user['role']=="user"){
        $id=$user['id'];
        
    require_once __DIR__."/../views/user/articls.php";
       
    }
    else 
    require_once __DIR__."/../views/admin/articls.php";

}
   
}



public function add($request){
$this->model->add($request);

    require_once __DIR__."/../views/login.php";
}
}

?>