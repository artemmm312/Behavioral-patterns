<?php

namespace Command;

class Command1 implements Command
{
	private string $operation;

	public function __construct(string $operation)
	{
		$this->operation = $operation;
	}

	public function execute(): void
	{
		echo "Выполнена операция (" . $this->operation . ")<br>";
	}
}
