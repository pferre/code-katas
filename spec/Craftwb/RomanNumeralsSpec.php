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

	function it_returns_IV_for_4()
	{
		$this->romanNumeralFor(4)->shouldReturn('IV');
	}

	function it_returns_V_for_5()
	{
		$this->romanNumeralFor(5)->shouldReturn('V');
	}

	function it_returns_VI_for_6()
	{
		$this->romanNumeralFor(6)->shouldReturn('VI');
	}

	function it_returns_IX_for_9()
	{
		$this->romanNumeralFor(9)->shouldReturn('IX');
	}

	function it_returns_X_for_10()
	{
		$this->romanNumeralFor(10)->shouldReturn('X');
	}

	function it_returns_XI_for_11()
	{
		$this->romanNumeralFor(11)->shouldReturn('XI');
	}

	function it_returns_XLIX_for_49()
	{
		$this->romanNumeralFor(49)->shouldReturn('XLIX');
	}

	function it_returns_L_for_50()
	{
		$this->romanNumeralFor(50)->shouldReturn('L');
	}

	function it_returns_XCIX_for_99()
	{
		$this->romanNumeralFor(99)->shouldReturn('XCIX');
	}

	function it_returns_C_for_100()
	{
		$this->romanNumeralFor(100)->shouldReturn('C');
	}

	function it_returns_CM_for_900()
	{
		$this->romanNumeralFor(900)->shouldReturn('CM');
	}

	function it_returns_DCCCXC_for_890()
	{
		$this->romanNumeralFor(890)->shouldReturn('DCCCXC');
	}



}
