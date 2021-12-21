<?php

namespace State;

class State2 extends State
{
	public function handle1(): void
	{
		echo "Состояние2 обрабатывает запрос1 от контекста.\n";
	}

	public function handle2(): void
	{
		echo "Состояние2 получило запрос2 контекста и переводит его в Состояние1.\n";
		$this->context->transition(new State1());
	}
}