<?php

/* Снимок — это поведенческий паттерн проектирования, 
который позволяет сохранять и восстанавливать прошлые состояния объектов, 
не раскрывая подробностей их реализации. */


class Originator
{

	private $state;

	public function __construct(int $state)
	{
		$this->state = $state;
		echo "Создатель: моё изначальное состояние: {$this->state}\n";
	}


	public function calculation(): void
	{
		$this->state += 100;
		echo "Создатель: моё состояние изменилось {$this->state}<br>";
		}

	public function save(): Memento
	{
		return new ConcreteMemento($this->state);
	}

	public function restore(Memento $memento): void
	{
		$this->state = $memento->getState();
		echo "Создатель: моё состояние изменилось: {$this->state}<br>";
	}
}


interface Memento
{
	public function getName(): string;

	public function getDate(): string;
}

class ConcreteMemento implements Memento
{
	private $state;

	private $date;

	public function __construct(string $state)
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
		return $this->date . " / (" . substr($this->state, 0, 9) . "...)";
	}

	public function getDate(): string
	{
		return $this->date;
	}
}

/**
 * Опекун не зависит от класса Конкретного Снимка. Таким образом, он не имеет
 * доступа к состоянию создателя, хранящемуся внутри снимка. Он работает со
 * всеми снимками через базовый интерфейс Снимка.
 */
class Caretaker
{
	private $mementos = [];

	private $originator;

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


$originator = new Originator(13);
$caretaker = new Caretaker($originator);

$caretaker->backup();
$originator->calculation();

$caretaker->backup();
$originator->calculation();

$caretaker->backup();
$originator->calculation();

$caretaker->showHistory();

echo "Откатываемся на передыдущее состояние<br>";
$caretaker->undo();

echo "Ещё раз откатываемся на предыдущее состояние<br>";
$caretaker->undo();