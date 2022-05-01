<?php
namespace app;
class Inventory{
    public $cropname;
    public $cropquantity;
    public $exp;
    public $harvestdate;
     public function Addinventory($name,$quantity,$hdate){
         
         $this->cropname = $name;
         $this->cropquantity = $quantity;
         $this->harvestdate=$hdate;
         $this->exp=date('Y-m-d', strtotime($hdate. ' + 10 day'));
     }

     public function expire($edate)
     {
        if ($this->exp==$edate)
        {
            return True;
        }
        else{
            return False;
        }
         }
     }
    



?>