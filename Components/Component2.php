<?php

namespace Component;

use Visitor\Visitor;

class Component2 implements Component
{
	public function accept(Visitor $visitor): void
	{
		$visitor->visitCom2($this);
	}

	public function doSomething(): string
	{
		return "Buy.";
	}
}