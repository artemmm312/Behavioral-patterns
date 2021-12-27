<?php

namespace Visitor;

use Component\Component, Component\Component1, Component\Component2;

class concreteVisitor implements Visitor
{
	public function visitCom1(Component1 $com1): void
	{
		echo $com1->doSomething() . "concreteVisitor visit component1<br>";
	}

	public function visitCom2(Component2 $com2): void
	{
		echo $com2->doSomething() . "concreteVisitor visit component2<br>";
	}
}