<?php

namespace Template;

class ConcreteClass1 extends BaseClass
{
	protected function requiredOperations1(): void
	{
		echo "Класс1: Операция 1\n";
	}

	protected function requiredOperation2(): void
	{
		echo "Класс1: Операция 2\n";
	}
}