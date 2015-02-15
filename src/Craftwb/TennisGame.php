<?php

namespace Craftwb;

use Craftwb\Player;

class TennisGame
{
	private $player1;

	private $player2;

	private $lookup = [
		'0' => 'Love',
		'1'	=> 'Fifteen',
		'2' => 'Thirty',
		'3' => 'Forty'
	];


	function __construct(Player $player1, Player $player2)
	{
		$this->player1 = $player1;

		$this->player2 = $player2;
	}

	public function score()
	{
		if ( $this->hasAWinner() )
		{
			return 'Win for ' .$this->winner()->getName();
		}

		if ( $this->hasAdvantage() )
		{
			return 'Advantage ' .$this->winner()->getName();
		}

		if ( $this->isDeuce() )
		{
			return 'Deuce';
		}


		$score = $this->lookup[ $this->player1->getPoints() ] . '-';
		$score .= $this->checkForEqualScore()  ? 'All' : $this->lookup[ $this->player2->getPoints() ]; 

		return $score;
	}


	private function checkForEqualScore()
	{
		return $this->player1->getPoints() == $this->player2->getPoints();
	}

	private function hasAWinner()
	{	
		return $this->hasEnoughPointsToWin() && $this->leadsByTwoPoints();	
	}

	private function winner()
	{
		return $this->player1->getPoints() > $this->player2->getPoints() ? $this->player1 : $this->player2;
	}

	private function hasEnoughPointsToWin()
	{
		return max( [$this->player1->getPoints(), $this->player2->getPoints()] ) >= 4; 
	}

	private function leadsByTwoPoints()
	{
		return abs( $this->player1->getPoints() - $this->player2->getPoints() ) >= 2;
	}

	private function leadsByOnePoint()
	{
		return abs( $this->player1->getPoints() - $this->player2->getPoints() ) == 1;
	}

	private function hasAdvantage()
	{
		return $this->hasEnoughPointsToWin() && $this->leadsByOnePoint();
	}

	private function isDeuce()
	{
		return $this->gameHasSixPointsOrMore() && $this->checkForEqualScore();
	}

	private function gameHasSixPointsOrMore()
	{
		return $this->player1->getPoints() + $this->player2->getPoints() >= 6;
	}

}
