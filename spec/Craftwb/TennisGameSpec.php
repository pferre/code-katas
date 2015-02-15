<?php

namespace spec\Craftwb;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Craftwb\Player;

class TennisGameSpec extends ObjectBehavior
{
	protected $pierre;

	protected $jane;

	function let(Player $player1, Player $player2)
	{
		$this->pierre = new Player('Pierre Ferre', 0);
		$this->jane = new Player('Jane Ferre', 0);

		$this->beConstructedWith($this->pierre, $this->jane);
	}

    function it_returns_nil_score()
    {
    	$this->score()->shouldReturn('Love-All');
    }

    function it_retuns_score_for_1_0()
    {
    	$this->pierre->scorePoints(1);

    	$this->score()->shouldReturn('Fifteen-Love');
    }

    function it_returns_score_for_2_0()
    {
    	$this->pierre->scorePoints(2);

    	$this->score()->shouldReturn('Thirty-Love');
    }

    function it_returns_score_for_3_0()
    {
        $this->pierre->scorePoints(3);

        $this->score()->shouldReturn('Forty-Love');
    }

    function it_returns_winner_for_4_0()
    {
        $this->pierre->scorePoints(4);


        $this->score()->shouldReturn('Win for Pierre Ferre');
    }

    function it_returns_winner_for_0_4()
    {
        $this->jane->scorePoints(4);

        $this->score()->shouldReturn('Win for Jane Ferre');
    }

    function it_returns_winner_for_8_10()
    {
        $this->pierre->scorePoints(8);

        $this->jane->scorePoints(10);

        $this->score()->shouldReturn('Win for Jane Ferre');     
    }

    function it_returns_score_for_4_3()
    {
        $this->pierre->scorePoints(4);

        $this->jane->scorePoints(3);

        $this->score()->shouldReturn('Advantage Pierre Ferre');
    }

    function it_returns_score_for_3_4()
    {
        $this->pierre->scorePoints(3);

        $this->jane->scorePoints(4);

        $this->score()->shouldReturn('Advantage Jane Ferre');   
    }

    function it_returns_score_deuce()
    {
        $this->pierre->scorePoints(3);

        $this->jane->scorePoints(3);

        $this->score()->shouldReturn('Deuce');
    }

    function it_returns_score_for_8_8()
    {
        $this->pierre->scorePoints(8);

        $this->jane->scorePoints(8);

        $this->score()->shouldReturn('Deuce');     
    }

    function it_returns_score_for_8_9()
    {
        $this->pierre->scorePoints(8);

        $this->jane->scorePoints(9);

        $this->score()->shouldReturn('Advantage Jane Ferre');     
    }

}
