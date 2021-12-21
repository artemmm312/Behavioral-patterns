<?php

namespace Context;

use Strategy\Strategy;

class Context
{
	private $strategy;

	public function __construct(Strategy $strategy)
	{
		$this->strategy = $strategy;
	}

	public function setStrategy(Strategy $strategy): void
	{
		$this->strategy = $strategy;
	}

	public function executeStrategy(int $a, int $b): void
	{
		echo $this->strategy->execute($a, $b);
		echo "<br>";
	}
}