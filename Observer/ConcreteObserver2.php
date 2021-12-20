<?php

namespace MyObserver;

use SplObserver;
use SplSubject;

class ConcreteObserver2 implements SplObserver
{
	public function update(SplSubject $subject): void
	{
		echo "Наблюдатель2 отреагировал на изменение издателя.<br>";
	}
}