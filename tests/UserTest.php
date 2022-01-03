<?php
require_once __DIR__ . '/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testUserData() {
        $this->assertEquals("Abduljeleel", "Abduljeleel");
    }
}