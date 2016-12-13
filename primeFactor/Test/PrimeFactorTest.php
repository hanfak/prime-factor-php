<?php
namespace primeFactor\Test;

use primeFactor\src\PrimeFactor;

class PrimeFactorTest extends \PHPUnit_Framework_TestCase {

    public function testPass() {
        $this->assertTrue(true);
    }

    public function testEquality() {
        $this->assertEquals(1,1);
    }

    public function testPrimeFactorObject() {
      $this->primeFactor = new PrimeFactor();
    }

}
