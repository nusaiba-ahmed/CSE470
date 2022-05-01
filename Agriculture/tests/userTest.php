<?php

class userTest extends \PHPUnit\Framework\TestCase{
    protected $user;
    public function testSignUpandLogin(){
        $this->user = new \App\user;

        $this->user->signUp("xyz",123456);

        $this->assertEquals($this->user->login("xyz",123456),True);
    }
}

?>
