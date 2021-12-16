<?php

namespace Collection;

use MyIterator\Iterator1, IteratorAggregate;
use Traversable;

class Collection1 implements IteratorAggregate
{
	private array $items = [];

	public function getItems(): array
	{
		return $this->items;
	}

	public function addItem(string $item): void
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