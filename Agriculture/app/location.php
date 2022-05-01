<?php
namespace app;
class location{
    public $destination;
    public $suggestedcrop;
    
     public function givelocation($address){
         
         $this->destination=$address;
         $this->suggestedcrop="Tea,Rice,Jute";
         
     }

     public function showcrop($crop)
     {
         if ($this->suggestedcrop==$crop)
         {
           return True;
         }
         else
         {
             return false;
         }
     }
}




?>