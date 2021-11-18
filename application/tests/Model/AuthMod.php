<?php

use PHPUnit\Framework\TestCase;

class AuthMod extends TestCase
{
    public $nama;
    public $username;
    public $email;
    public $password;

    /** @test */
    public function dbInsertUser()
    {
        $obj = new AuthMod();
        $this->nama = 'name_full';
        $this->username = 'user_name';
        $this->email = 'user_email';
        $this->password = 'user_password';
        $this->assertTrue(true);
    }
}
