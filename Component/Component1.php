<?php

namespace Component;

class Component1 extends BaseComponent
{
	public function input(int $a, int $b): void
	{
		echo "Передаем данные ($a и $b) на сервер.<br>";
		$arr[] = $a;
		$arr[] = $b;
		$this->mediator->notify($this, $arr);
	}

	public function output(int $result): void
	{
		echo "Результат сложения равен $result.";
	}
}