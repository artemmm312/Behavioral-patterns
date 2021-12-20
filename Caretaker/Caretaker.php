<?php

namespace Caretaker;

use Originator\Originator;

class Caretaker
{
	private array $mementos = [];
	private Originator $originator;

	public function __construct(Originator $originator)
	{
		$this->originator = $originator;
	}

	public function backup(): void
	{
		echo "Сохранение состояния...<br>";
		$this->mementos[] = $this->originator->save();
	}

	public function undo(): void
	{
		if (!count($this->mementos)) {
			return;
		}
		$memento = array_pop($this->mementos);
		echo "Восстановление состояния " . $memento->getName() . "<br>";
		try {
			$this->originator->restore($memento);
		} catch (\Exception $e) {
			$this->undo();
		}
	}

	public function showHistory(): void
	{
		echo "Список снимков:<br>";
		foreach ($this->mementos as $memento) {
			echo $memento->getName() . "<br>";
		}
	}
}