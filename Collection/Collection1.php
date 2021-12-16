<?php

namespace Collection;

use MyIterator\Iterator1, IteratorAggregate;
use Traversable;

class Collection1 implements IteratorAggregate
{
	private $items = [];

	public function getItems()
	{
		return $this->items;
	}

	public function addItem($item)
	{
		$this->items[] = $item;
	}



	public function getIterator(): Traversable
	{
		return new Iterator1($this);
	}

	public function getReverseIterator(): Traversable
	{
		return new Iterator1($this, true);
	}
}