<?php

namespace Receiver;

class Receiver
{
	public function calculations(int $a, int $b): void
	{
		$c = $a + $b;
		echo "Вычисление чисел $a и $b = $c";
	}
}