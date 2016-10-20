<?php

class helloWorld{

    public function add($a, $b) {
        return $a+$b;
    }
    
    function factorOf($number)
    {
        $factors = array();
        $divisor = 2;    
    
        while($number > 1) {
            while($number % $divisor == 0) {
                array_push($factors, $divisor); 
                $number /= $divisor;
            }
            $divisor++;
        }
    
        return $factors;
    }
}