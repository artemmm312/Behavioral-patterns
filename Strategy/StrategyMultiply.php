<?php

namespace Strategy;

class StrategyMultiply implements Strategy
{
	public function execute(int $a, int $b): int
	{
		return $a * $b;
	}
}