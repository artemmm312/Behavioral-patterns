<?php

namespace Template;

class ConcreteClass2 extends BaseClass
{
	protected function requiredOperations1(): void
	{
		echo "Класс2: Операция 1\n";
	}

	protected function requiredOperation2(): void
	{
		echo "Класс 2: Операция 2\n";
	}

	protected function hook1(): void
	{
		echo "Класс 2: переопределен хук1\n";
	}
}