<?php

namespace Component;

use Mediator\Mediator;

class BaseComponent
{
	protected Mediator|null $mediator;

	public function __construct(Mediator $mediator = null)
	{
		$this->mediator = $mediator;
	}

	public function setMediator(Mediator $mediator): void
	{
		$this->mediator = $mediator;
	}
}