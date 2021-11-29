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


    //TEST FOR Per 5 Minutes

    public function test_per5minutes_given5_shouldReturnYOOOOOOOOOO()
    {
        $actual = $this->berlinClockKata->per5minutes(5);
        $this->assertEquals("YOOOOOOOOOO", $actual);
    }

    public function test_per5minutes_given10_shouldReturnYYOOOOOOOOO()
    {
        $actual = $this->berlinClockKata->per5minutes(10);
        $this->assertEquals("YYOOOOOOOOO", $actual);
    }

    public function test_per5minutes_given15_shouldReturnYYROOOOOOOO()
    {
        $actual = $this->berlinClockKata->per5minutes(15);
        $this->assertEquals("YYROOOOOOOO", $actual);
    }

    public function test_per5minutes_given20_shouldReturnYYRYOOOOOOO()
    {
        $actual = $this->berlinClockKata->per5minutes(20);
        $this->assertEquals("YYRYOOOOOOO", $actual);
    }

    public function test_per5minutes_given25_shouldReturnYYRYYOOOOOO()
    {
        $actual = $this->berlinClockKata->per5minutes(25);
        $this->assertEquals("YYRYYOOOOOO", $actual);
    }
    public function test_per5minutes_given30_shouldReturnYYRYYROOOOO()
    {
        $actual = $this->berlinClockKata->per5minutes(30);
        $this->assertEquals("YYRYYROOOOO", $actual);
    }

    public function test_per5minutes_given35_shouldReturnYYRYYRYOOOO()
    {
        $actual = $this->berlinClockKata->per5minutes(35);
        $this->assertEquals("YYRYYRYOOOO", $actual);
    }

    public function test_per5minutes_given40_shouldReturnYYRYYRYYOOO()
    {
        $actual = $this->berlinClockKata->per5minutes(40);
        $this->assertEquals("YYRYYRYYOOO", $actual);
    }
    public function test_per5minutes_given45_shouldReturnYYRYYRYYROO()
    {
        $actual = $this->berlinClockKata->per5minutes(45);
        $this->assertEquals("YYRYYRYYROO", $actual);
    }

    //TEST Simle Hours
    public function test_simpleHours_given0_shouldReturnOOOO()
    {
        $actual = $this->berlinClockKata->simpleHours(0);
        $this->assertEquals("OOOO", $actual);
    }

    public function test_simpleHours_given1_shouldReturnROOO()
    {
        $actual = $this->berlinClockKata->simpleHours(1);
        $this->assertEquals("ROOO", $actual);
    }

    public function test_simpleHours_given2_shouldReturnRROO()
    {
        $actual = $this->berlinClockKata->simpleHours(2);
        $this->assertEquals("RROO", $actual);
    }

    public function test_simpleHours_given3_shouldReturnRRRO()
    {
        $actual = $this->berlinClockKata->simpleHours(3);
        $this->assertEquals("RRRO", $actual);
    }

    public function test_simpleHours_given4_shouldReturnRRRR()
    {
        $actual = $this->berlinClockKata->simpleHours(4);
        $this->assertEquals("RRRR", $actual);
    }

    // TEST Per 5 hours

    public function test_per5hours_given5_shouldReturnROOO()
    {
        $actual = $this->berlinClockKata->per5hours(5);
        $this->assertEquals("ROOO", $actual);
    }

    public function test_per5hours_given10_shouldReturnRROO()
    {
        $actual = $this->berlinClockKata->per5hours(10);
        $this->assertEquals("RROO", $actual);
    }

    public function test_per5hours_given15_shouldReturnRRRO()
    {
        $actual = $this->berlinClockKata->per5hours(15);
        $this->assertEquals("RRRO", $actual);
    }

    public function test_per5hours_given20_shouldReturnRRRR()
    {
        $actual = $this->berlinClockKata->per5hours(20);
        $this->assertEquals("RRRR", $actual);
    }



}
