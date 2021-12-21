<?php

namespace State;

use Context\Context;

abstract class State
{
	protected Context $context;

	public function setContext(Context $context): void
	{
		$this->context = $context;
	}

	abstract public function handle1(): void;

	abstract public function handle2(): void;
}
