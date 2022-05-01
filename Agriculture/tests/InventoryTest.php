<?php

class InventoryTest extends \PHPUnit\Framework\TestCase{
    protected $Inventory;
    public function testharvest(){
        $this->Inventory = new \App\Inventory;
        $this->Inventory->Addinventory("mango",1000,"2010-09-17");

        $this->assertEquals($this->Inventory->expire("2010-09-27"),True);
       
    }
}

?>