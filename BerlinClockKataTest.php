<?php


//require "vendor/autoload.php";
require "BerlinClockKata.php";

use BerlinClockKata\BerlinClockKata;
use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{

    private $berlinClockKata;

    protected function setUp(): void
    {
        parent::setUp();
        $this->berlinClockKata = new BerlinClockKata();
    }

    //TEST FOR Simple Minutes

    public function test_simpleMinutes_given1_ShouldReturnYOOO()
    {
        $actual = $this->berlinClockKata->simpleMinutes(1);
        $this->assertEquals("YOOO", $actual);
    }

    public function test_simpleMinutes_given2_shouldReturnYYOO()
    {
        $actual = $this->berlinClockKata->simpleMinutes(2);
        $this->assertEquals("YYOO", $actual);
    }

    public function test_simpleMinutes_given3_shouldReturnYYYO()
    {
        $actual = $this->berlinClockKata->simpleMinutes(3);
        $this->assertEquals("YYYO", $actual);
    }

    public function test_simpleMinutes_given4_shouldReturnYYYY()
    {
        $actual = $this->berlinClockKata->simpleMinutes(4);
        $this->assertEquals("YYYY", $actual);
    }






}
