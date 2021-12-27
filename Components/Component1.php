<?php

namespace Component;

use Visitor\Visitor;

class Component1 implements Component
{
	public function accept(Visitor $visitor): void
	{
		$visitor->visitCom1($this);
	}

	public function doSomething(): string
	{
		return "Hello...";
	}
}