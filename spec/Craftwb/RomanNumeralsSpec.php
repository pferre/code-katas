<?php

namespace spec\Craftwb;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsSpec extends ObjectBehavior
{
	function it_returns_I_for_1()
	{
		$this->romanNumeralFor(1)->shouldReturn('I');
	}

	function it_returns_II_for_2()
	{
		$this->romanNumeralFor(2)->shouldReturn('II');
	}

	function it_returns_III_for_3()
	{
		$this->romanNumeralFor(3)->shouldReturn('III');
	}

	function it_returns_IV_for_4()
	{
		$this->romanNumeralFor(4)->shouldReturn('IV');
	}

	function it_returns_V_for_5()
	{
		$this->romanNumeralFor(5)->shouldReturn('V');
	}
}
