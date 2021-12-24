<?php

interface Component
{
	public function accept(Visitor $visitor);
}

class Component1 implements Component
{
	public function accept(Visitor $visitor)
	{
		$visitor->visitCom1($this);
	}

	public function doSomething()
	{
		return "Hello...";
	}
}

class Component2 implements Component
{
	public function accept(Visitor $visitor)
	{
		$visitor->visitCom2($this);
	}

	public function doSomething()
	{
		return "Buy.";
	}
}

interface Visitor
{
	public function visitCom1(Component1 $com1);
	public function visitCom2(Component2 $com2);
}

class concreteVisitor implements Visitor
{
	public function visitCom1(Component1 $com1)
	{
		echo $com1->doSomething() . "concreteVisitor<br>";
	}

	public function visitCom2(Component2 $com2)
	{
		echo $com2->doSomething() . "concreteVisitor<br>";
	}
}


//ClientCode

$visitor = new concreteVisitor();
$com1 = new Component1();
$com2 = new Component2();

$com1->accept($visitor);
$com2->accept($visitor);

