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

    public function test3DecompositionOf6() {
      $expected = [2,3];
      $actual = $this->primeFactor->decompose(6);

      $this->assertEquals($expected, $actual);
    }

    public function test4DecomposeCompositeDivBy2(){
      $expected = [2,7];
      $actual = $this->primeFactor->decompose(14);

      $this->assertEquals($expected, $actual);
    }

    public function test5DecomposeCompositeDivBy3(){
      $expected = [3,11];
      $actual = $this->primeFactor->decompose(33);

      $this->assertEquals($expected, $actual);
    }

}
