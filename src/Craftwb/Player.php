<?php

namespace Craftwb;

class Player {


	private $name;

	private $points;


	function __construct($name, $points)
	{
		$this->name = $name;

		$this->points = $points;
	}

	public function scorePoints($points)
	{
		$this->points = $points;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getPoints()
	{
		return $this->points;
	}

}