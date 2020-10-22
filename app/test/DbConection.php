<?php
use PHPUnit\Framework\TestCase;

require_once("../repositories/DataSource.php");
final class DbConection extends TestCase
{
    public function testShouldCheckAssertTrue(){
        $this->assertTrue(true);
    }

    public function testShouldCheckAssertEquals(){
        $this->assertEquals("a", "a");
    }

}

