<?php

namespace Craftwb;

class PrimeFactors
{

    public function factorsOf($integer)
    {
    	$primes = [];

    	for ($divisor = 2; $integer > 1; $divisor++) 
    	{
	    	for (;$integer % $divisor == 0; $integer /= $divisor) 
	    	{
	    		$primes[] = $divisor;
	    	}
    	}

    	return $primes;
    }
}
