<?php

namespace spec\Craftwb;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{

    function it_returns_an_empty_array_for_factors_of_1()
    {
    	$this->factorsOf(1)->shouldReturn([]);
    }

    function it_returns_an_array_containing_2_for_factors_of_2()
    {
    	$this->factorsOf(2)->shouldReturn([2]);
    }

    function it_returns_an_array_containing_3_for_factors_of_3()
    {
    	$this->factorsOf(3)->shouldReturn([3]);
    }

    function it_returns_an_array_containing_2_2_for_factors_of_4()
    {
    	$this->factorsOf(4)->shouldReturn([2,2]);
    }

    function it_returns_an_array_containing_5_for_factors_of_5()
    {
    	$this->factorsOf(5)->shouldReturn([5]);
    }

    function it_returns_an_array_containing_2_3_for_factors_of_6()
    {
    	$this->factorsOf(6)->shouldReturn([2,3]);
    }

    function it_returns_an_array_containing_7_for_factors_of_7()
    {
    	$this->factorsOf(7)->shouldReturn([7]);
    }

    function it_returns_an_array_containing_2_2_2_for_factors_of_8()
    {
    	$this->factorsOf(8)->shouldReturn([2,2,2]);
    }

    function it_returns_an_array_containing_3_3_for_factors_of_9()
    {
    	$this->factorsOf(9)->shouldReturn([3,3]);
    }

    function it_returns_an_array_containing_2_2_5_5_for_factors_of_100()
    {
    	$this->factorsOf(100)->shouldReturn([2,2,5,5]);
    }
}
