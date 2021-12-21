<?php

namespace Strategy;

class StrategySubtract implements Strategy
{
	public function execute(int $a, int $b): int
	{
		return $a - $b;
	}
}