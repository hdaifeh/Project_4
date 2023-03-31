<?php

use PHPUnit\Framework\TestCase;
use App\Auth;

class AuthTest extends TestCase
{
    private $auth;

    protected function setUp(): void
    {
        $this->auth = new Auth();
    }

    public function testGenerateToken()
    {
        $token = $this->auth->generateToken(1, 'john.doe@example.com');
        $this->assertNotNull($token);
        $this->assertIsString($token);
        $this->assertGreaterThan(0, strlen($token));
    }

    public function testValidateToken()
    {
        $token = $this->auth->generateToken(1, 'john.doe@example.com');
        $this->assertTrue($this->auth->validateToken($token));
    }
}
