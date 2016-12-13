<?php
namespace primeFactor\Test;

use primeFactor\src\PrimeFactor;

class PrimeFactorTest extends \PHPUnit_Framework_TestCase {

    public function setUp() {
      parent::setUp();
      $this->primeFactor = new PrimeFactor();
    }

    public function test1DecompositionOf2(){
      $expected = [2];
      $actual = $this->primeFactor->decompose(2);

      $this->assertEquals($expected, $actual);
    }

    public function test2DecompositionOfPrime() {
      $expected = [3];
      $actual = $this->primeFactor->decompose(3);

      $this->assertEquals($expected, $actual);
    }

}
