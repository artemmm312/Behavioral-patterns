<?php

namespace Context;

use State\State;

class Context
{
	private State $state;

	public function __construct(State $state)
	{
		$this->transition($state);
	}

	public function transition(State $state): void
	{
		echo "Переход в состояние : " . get_class($state) . ".\n";
		$this->state = $state;
		$this->state->setContext($this);
	}

	public function request1(): void
	{
		$this->state->handle1();
	}

	public function request2(): void
	{
		$this->state->handle2();
	}
}