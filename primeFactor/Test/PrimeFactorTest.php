<?php
namespace primeFactor\Test;

use primeFactor\src\PrimeFactor;

class PrimeFactorTest extends \PHPUnit_Framework_TestCase {
    public function testPrimeFactorObject() {
      $primeFactor = new PrimeFactor();
    }

    public function test1DecompositionOf2(){
      $primeFactor = new PrimeFactor();
      $expected = [2];
      $actual = $primeFactor->decompose(2);
      $this->assertEquals($expected, $actual);
    }

}
