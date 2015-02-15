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

    	$roman = '';

    	foreach (static::$lookup as $limit => $value) {
    		while ($number >= $limit) {
    			$roman .= $value;
    			$number -= $limit;
    		}
    	}

    	return $roman;
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
