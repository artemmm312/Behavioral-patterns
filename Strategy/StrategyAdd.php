<?php

namespace Strategy;

class StrategyAdd implements Strategy
{
	public function execute(int $a, int $b): int
	{
		return $a + $b;
	}
}