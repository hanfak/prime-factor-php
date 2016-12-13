<?php

namespace primeFactor\src;

class PrimeFactor
{
    public function decompose($number){
        $factors = [];
        $factor = 2;

        while($number > 1) {
          for(; $number % $factor === 0; $number /= $factor){
            array_push($factors, $factor);
          }
          $factor += 1;
        }

        return $factors;
    }


}
