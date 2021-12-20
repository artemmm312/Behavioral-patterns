<?php

namespace MySubject;

use SplSubject;
use SplObjectStorage;
use SplObserver;

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