<?php

namespace MyObserver;

use SplObserver;
use SplSubject;

class ConcreteObserver1 implements SplObserver
{
	public function update(SplSubject $subject): void
	{
		echo "Наблюдатель1 отреагировал на изменение издателя.<br>";
	}
}
