<?php


require "vendor/autoload.php";
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

}
