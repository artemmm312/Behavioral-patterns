<?php


interface Mediator
{
	public function notify(object $sender, array $arr): void;
}

class concreteMediator implements Mediator
{
	private Component1 $component1;
	private Component2 $component2;

	public function __construct(Component1 $c1, Component2 $c2)
	{
		$this->component1 = $c1;
		$this->component1->setMediator($this);
		$this->component2 = $c2;
		$this->component2->setMediator($this);
	}

public function notify(object $sender, array $arr): void
{
	$this->component1->output($this->component2->operation($arr));
}

}

class BaseComponent
{
	protected $mediator;

	public function __construct(Mediator $mediator = null)
	{
		$this->mediator = $mediator;
	}

	public function setMediator(Mediator $mediator): void
	{
		$this->mediator = $mediator;
	}
}

class Component1 extends BaseComponent
{
	public function input($a, $b): void
	{
		echo "Передаем данные ($a и $b) на сервер.<br>";
		$arr[] = $a; $arr[]= $b;
		$this->mediator->notify($this, $arr);
		//return $arr;
	}

	public function output(int $c): void
	{
		echo "Результат сложения равен $c.";
	}

}

class Component2 extends BaseComponent
{
	public function operation(array $arr)
	{
		echo "Обработка данных...<br>";
		$a = $arr[0]; $b = $arr[1];
		$c = $a + $b;
		return $c;
	}
}

//clientCode

$c1 = new Component1();
$c2 = new Component2();
$mediator = new concreteMediator($c1, $c2);

$c1->input(5, 10);

