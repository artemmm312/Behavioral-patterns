<?php

/* Наблюдатель — это поведенческий паттерн проектирования, 
который создаёт механизм подписки, позволяющий одним объектам следить 
и реагировать на события, происходящие в других объектах. */


class Subject implements SplSubject
{

	public int $state = 10;
	private SplObjectStorage $observers;

	public function __construct()
	{
		$this->observers = new SplObjectStorage();
	}

	public function attach(SplObserver $observer): void
	{
		echo "Прикреплен наблюдатель.<br>";
		$this->observers->attach($observer);
	}

	public function detach(SplObserver $observer): void
	{
		$this->observers->detach($observer);
		echo "Наблюдать отключен.<br>";
	}

	public function notify(): void
	{
		echo "Уведомление наблюдателю...<br>";
		foreach ($this->observers as $observer) {
			$observer->update($this);
		}
	}


	public function calculation(): void
	{
		echo "<br>Что то делается...<br>";
		$this->state += 100;
		echo "Состояние издателя изменилось: $this->state<br>";
		$this->notify();
	}
}


class ConcreteObserver1 implements SplObserver
{
	public function update(SplSubject $subject): void
	{
		echo "Наблюдатель1 отреагировал на изменение издателя.<br>";
	}
}

class ConcreteObserver2 implements SplObserver
{
	public function update(SplSubject $subject): void
	{
		echo "Наблюдатель2 отреагировал на изменение издателя.<br>";
	}
}


$subject = new Subject();

$o1 = new ConcreteObserver1();
$subject->attach($o1);

$o2 = new ConcreteObserver2();
$subject->attach($o2);

$subject->calculation();
$subject->calculation();

$subject->detach($o2);

$subject->calculation();
