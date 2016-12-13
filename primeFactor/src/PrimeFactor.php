<?php

namespace primeFactor\src;

class PrimeFactor
{
    public function decompose($number){
        $factors = [];
        $factor = 2;

        while($number > 1) {
          while($number % $factor === 0){
            array_push($factors, $factor);
            $number /= $factor;
          }
          $factor += 1;
        }

        return $factors;
    }


}
