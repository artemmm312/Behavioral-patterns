<?php

namespace Strategy;

interface Strategy
{
	public function execute(int $a, int $b): int;
}