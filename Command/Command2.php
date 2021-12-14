<?php

namespace Command;

use Receiver\Receiver;

class Command2 implements Command
{
	private Receiver $receiver;

	private int $a;
	private int $b;

	public function __construct(Receiver $receiver, int $a, int $b)
	{
		$this->receiver = $receiver;
		$this->a = $a;
		$this->b = $b;
	}

	public function execute(): void
	{
		echo "Передаю на выполнение в приёмник.<br>";
		$this->receiver->calculations($this->a, $this->b);
	}
}
