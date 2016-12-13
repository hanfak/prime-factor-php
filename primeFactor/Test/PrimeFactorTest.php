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

    public function test5DecomposeCompositeDivByMultiple2(){
      $expected = [2,2,11];
      $actual = $this->primeFactor->decompose(44);

      $this->assertEquals($expected, $actual);
    }

    public function test6DecomposeCompositeDivByMultiple3(){
      $expected = [3,3];
      $actual = $this->primeFactor->decompose(9);

      $this->assertEquals($expected, $actual);
    }

    public function test7DecomposeComposite(){
      $expected = [3,3,5,5,5,7];
      $actual = $this->primeFactor->decompose(7875);

      $this->assertEquals($expected, $actual);
    }


}
