<?php

class userTest extends \PHPUnit\Framework\TestCase{
    protected $user;
    public function testSignUpandLogin(){
        $this->user = new \App\user;

        $this->user->signUp("Lucifer",123456);

        $this->assertEquals($this->user->login("Lucifer",123456),True);
    }
}

?>