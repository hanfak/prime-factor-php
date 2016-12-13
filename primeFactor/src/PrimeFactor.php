<?php

namespace primeFactor\src;

class PrimeFactor
{
    public function decompose($number){
        $factors = [];
        if($number % 2 === 0) {
          array_push($factors, 2);
          $number = $number / 2;
        }
        if($number % 3 === 0) {
          array_push($factors, 3);
          $number = $number / 3;
        }
        if($number > 1) {
          array_push($factors, $number);
        }
        return $factors;
    }
}
