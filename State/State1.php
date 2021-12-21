<?php

namespace State;

use Context\Context;

class State1 extends State
{
	public function handle1(): void
	{
		echo "Состояние1 получило запрос1 контекста и переводит его в Состояние2.\n";
		$this->context->transition(new State2());
	}

	public function handle2(): void
	{
		echo "Состояние1 обрабатывает запрос2 от контекста.\n";
	}
}

