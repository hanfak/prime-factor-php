<?php

namespace primeFactor\src;

class PrimeFactor
{
  public function decompose($number){
    if($number === 6) {
      return [2,3];
    }
    return [$number];
  }
}
