<?php

namespace Template;

abstract class BaseClass
{
	final public function templateMethod(): void
	{
		$this->baseOperation1();
		$this->requiredOperations1();
		$this->baseOperation2();
		$this->hook1();
		$this->requiredOperation2();
		$this->baseOperation3();
		$this->hook2();
	}


	protected function baseOperation1(): void
	{
		echo "Основная часть работы\n";
	}

	protected function baseOperation2(): void
	{
		echo "Подклассы могут переопределять базовые методы\n";
	}

	protected function baseOperation3(): void
	{
		echo "Но все равно базовый класс делает основную работу\n";
	}

	abstract protected function requiredOperations1(): void;

	abstract protected function requiredOperation2(): void;


	protected function hook1(): void
	{
	}

	protected function hook2(): void
	{
	}
}