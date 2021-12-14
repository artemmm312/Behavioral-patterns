<?php

namespace Invoker;

use Command\Command;

class Invoker
{
	private Command $command1;
	private Command $command2;

	public function com1(Command $command): void
	{
		$this->commmand1 = $command;
	}

	public function com2(Command $command): void
	{
		$this->command2 = $command;
	}

	public function doSomething(): void
	{
		if ($this->command1 instanceof Command) {
			$this->command1->execute();
		}

		if ($this->commmand2 instanceof Command) {
			$this->command2->execute();
		}
	}
}