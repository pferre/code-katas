<?php

namespace spec\Craftwb;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Craftwb\FizzBuzz');
    }

    function it_translates_1_for_1()
    {
    	$this->execute(1)->shouldReturn(1);
    }

    function it_translates_2_for_2()
    {
    	$this->execute(2)->shouldReturn(2);
    }

    function it_translates_fizz_for_3()
    {
    	$this->execute(3)->shouldReturn('Fizz');
    }

    function it_translates_buzz_for_5()
    {
    	$this->execute(5)->shouldReturn('Buzz');
    }

    function it_translates_fizz_for_6()
    {
    	$this->execute(6)->shouldReturn('Fizz');
    }

    function it_translates_buzz_for_10()
    {
    	$this->execute(10)->shouldReturn('Buzz');
    }

    function it_translates_fizz_for_12()
    {
    	$this->execute(12)->shouldReturn('Fizz');
    }

    function it_translates_fizzbuzz_for_15()
    {
    	$this->execute(15)->shouldReturn('FizzBuzz');
    }

    function it_translates_fizz_for_123()
    {
    	$this->execute(123)->shouldReturn('Fizz');
    }

    function it_translates_7_for_7()
    {
    	$this->execute(7)->shouldReturn(7);
    }

}
