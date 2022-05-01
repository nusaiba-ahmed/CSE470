<?php
namespace app;
class User{
    public $name;
    public $password;

     public function signUp($name_f,$pass){
         
         $this->name = $name_f;
         $this->password = $pass;

     }

     public function login($name_t,$pass)
     {
         if ($this->name==$name_t and $this->password==$pass)
         {
             return True;
         }
         else{
             return False;
         }
     }
}

?>