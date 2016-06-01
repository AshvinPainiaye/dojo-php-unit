<?php
use SimplonReunion\Dojo;

/**
 * The test class for the starter class SimplonReunion/Dojo
 */
class DojoTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test si la méthode fizzBuzz retourne un tableau de 100 éléments
     */
    public function testListNumber()
    {
        $fizz   = new Dojo();
        $result = $fizz->fizzBuzz();
        $this->assertEquals(100, count($result));
    }

    /**
     * Test si la méthode fizzBuzz retourne Fizz pour un multiple de 3
     */
    public function testFizz()
    {
        $fizz   = new Dojo();
        $result = $fizz->fizzBuzz();
        $this->assertEquals("Fizz", $result[3]);
        $this->assertEquals("Fizz", $result[6]);
        $this->assertEquals("Fizz", $result[18]);
    }
    /**
     * Test si la méthode fizzBuzz retourne Buzz pour un multiple de 5
     */
    public function testBuzz()
    {
        $Buzz   = new Dojo();
        $result = $Buzz->fizzBuzz();
        $this->assertEquals("Buzz", $result[5]);
        $this->assertEquals("Buzz", $result[10]);
        $this->assertEquals("Buzz", $result[20]);
    }

    /**
     * Test si la méthode fizzbuzz retourne FizBuzz pour un multiple de 3 et 5
     *
     */
    public function testFizzBuzz()
    {
        $FizzBuzz = new Dojo();
        $result   = $FizzBuzz->fizzBuzz();
        $this->assertEquals("FizzBuzz", $result[15]);
        $this->assertEquals("FizzBuzz", $result[30]);
        $this->assertEquals("FizzBuzz", $result[45]);
    }

    /**
     * Test si la méthode fizzbuzz retourne des chiffes en dehors
     *
     */

    public function testRestNombre()
    {
        $FizzBuzz = new Dojo();
        $result   = $FizzBuzz->fizzBuzz();
        $this->assertEquals(2, $result[2]);
        $this->assertEquals(82, $result[82]);
        $this->assertEquals(98, $result[98]);
    }
}
