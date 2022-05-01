<?php

class locationTest extends \PHPUnit\Framework\TestCase{
    protected $location;
    public function testlocation(){
        $this->location = new \App\location;

        $this->location->givelocation("Sylhet");

        $this->assertEquals($this->location->showcrop("Tea,Rice,Jute"),True);
    }
}

?>