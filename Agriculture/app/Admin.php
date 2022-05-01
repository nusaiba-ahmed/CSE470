<?php
namespace app;
class Admin{
    public $policy;
   
     public function createpolicy($rule){
         
         $this->policy=$rule;
         
     }

     public function showpolicy()
     {
         return $this->policy;
     }
}




?>