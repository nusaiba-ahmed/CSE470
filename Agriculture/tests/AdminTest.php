<?php

class AdminTest extends \PHPUnit\Framework\TestCase{
    protected $Admin;
    public function testAdmin(){
        $this->Admin = new \App\Admin;

        $this->Admin->createpolicy("No location Outside BD allowed");

       
        $this->assertEquals($this->Admin->showpolicy(),"No location Outside BD allowed");
    }
}

?>