<?php
//declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/** @test */
final class UsersTest extends TestCase {
    public function testAddTest():void{
//        echo $a."This a values";
        $this->assertEquals(10, 7+3);
    }
    public function testSubtract():void{
        $this->assertEquals(3,10-7);
    }
}

//$newUserTest = new UsersTest();
//$newUserTest->testAddTest(2,8,10);
//$newUserTest->testSubtract();
