<?php

namespace Craftwb;

class PrimeFactors
{

    public function factorsOf($number)
    {
    	$primes = [];

    	for ($divisor = 2; $number > 1; $divisor++) 
    	{
	    	for (;$number % $divisor == 0; $number /= $divisor) 
	    	{
	    		$primes[] = $divisor;
	    	}
    	}

    	return $primes;
    }
}
