<?php 
class   Session{
    private $user=[];
    public function donnes($request,$user){
        
        $_SESSION['name']=$user['name'];
        $_SESSION['email']=$request['email'];
      $_SESSION['role']=$user['role'];
       return $_SESSION;

    }
}
?>