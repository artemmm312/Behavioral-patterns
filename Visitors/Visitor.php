<?php

namespace Visitor;

use Component\Component1, Component\Component2;

interface Visitor
{
	public function visitCom1(Component1 $com1): void;
	public function visitCom2(Component2 $com2): void;
}