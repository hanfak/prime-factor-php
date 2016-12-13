<?php

namespace primeFactor\src;

class PrimeFactor
{
    public function decompose($number){
        $factors = [];

        for($factor = 2; $number > 1; $factor += 1) {
          for(; $number % $factor === 0; $number /= $factor){
            array_push($factors, $factor);
          }
        }

        return $factors;
    }


}
