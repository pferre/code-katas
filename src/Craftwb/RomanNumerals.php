<?php

namespace Craftwb;

class RomanNumerals
{
	protected static $lookup = [
		100	=>	'C',
		99	=>	'XCIX',
		50	=> 	'L',
		49	=>	'XLIX',
		10	=>	'X',
		9	=>	'IX',
		5	=>	'V',
		4	=>	'IV',
		1   =>	'I'
	];

	/**
	 * 	@param number
	 *	@return string	
	 */
    public function romanNumeralFor($number)
    {
    	$this->checkForValidNumber($number);

    	$romanNumeral = '';

    	foreach (static::$lookup as $key => $value) {
    		while ($number >= $key) {
    			$romanNumeral .= $value;
    			$number -= $key;
    		}
    	}

    	return $romanNumeral;
    }

    /**
     * 	@param number
     *	@return number|InvalidArgumentException
     */
    private function checkForValidNumber($number)
    {
    	if ($number <= 0) {
    		return new InvalidArgumentException();
    	}
    }
}
