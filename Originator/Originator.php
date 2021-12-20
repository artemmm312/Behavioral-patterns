<?php

namespace Originator;

use Memento\Memento, Memento\ConcreteMemento;

class Originator
{
	private int $state;

	public function __construct(int $state)
	{
		$this->state = $state;
		echo "Создатель: моё изначальное состояние: $this->state <br>";
	}

	public function calculation(): void
	{
		$this->state += 100;
		echo "Создатель: моё состояние изменилось $this->state <br>";
	}

	public function save(): Memento
	{
		return new ConcreteMemento($this->state);
	}

	public function restore(Memento $memento): void
	{
		$this->state = $memento->getState();
		echo "Создатель: моё состояние изменилось: $this->state <br>";
	}
}
