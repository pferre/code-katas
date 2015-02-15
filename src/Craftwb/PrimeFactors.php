<?php

namespace Craftwb;

class PrimeFactors
{

    /**
     *  @param number
     *  @return array
     */
    public function factorsOf($number)
    {
        $this->checkForValidNumber($number);

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

    /**
     *  @param number
     *  @return number|InvalidArgumentException
     */
    private function checkForValidNumber($number)
    {
        if ($number <= 0 ) {
            return new InvalidArgumentException();
        }
    }
}
