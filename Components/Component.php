<?php

namespace Component;

use Visitor\Visitor;

interface Component
{
	public function accept(Visitor $visitor): void;
}