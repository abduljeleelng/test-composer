<?php declare(strict_types=1);
//require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use TestApp\http\Controller\UserController;

/** @test */
final class UserControllerTest extends TestCase {
    public function testUser():void{
        $userController = new UserController("ola","ade",'yemi');
        $this->assertEquals("Abduljeleel",$userController->user());
    }
    public function testMultiply():void{
        $this->assertEquals(12,4*3);
    }
}