<?php

namespace Memento;

class ConcreteMemento implements Memento
{
	private int $state;
	private string $date;

	public function __construct(int $state)
	{
		$this->state = $state;
		$this->date = date('Y-m-d H:i:s');
	}

	public function getState(): string
	{
		return $this->state;
	}

	public function getName(): string
	{
		return $this->date . " / ($this->state ...)";
	}

	public function getDate(): string
	{
		return $this->date;
	}
}
