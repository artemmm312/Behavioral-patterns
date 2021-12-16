<?php

namespace MyIterator;
use Iterator;
use Collection\Collection1;

class Iterator1 implements Iterator
{

	protected Collection1 $collection;
	protected int $position = 0;
	protected bool $reverse = false;

	public function __construct(Collection1 $collection, bool $reverse = false)
	{
		$this->collection = $collection;
		$this->reverse = $reverse;
	}

	//Возврат текущего элемента.
	public function current(): mixed
	{
		return $this->collection->getItems()[$this->position];
	}

	//Возвращает ключ текущего элемента.
	public function key(): mixed
	{
		return $this->position;
	}

	//Переходит к следующему элементу.
	public function next(): void
	{
		$this->position = $this->position + ($this->reverse ? -1 : 1);
	}

	//Возвращает итератор на первый элемент.
	public function rewind(): void
	{
		$this->position = $this->reverse ? count($this->collection->getItems()) - 1 : 0;
	}

	//Проверяет корректность текущей позиции.
	public function valid(): bool
	{
		return isset($this->collection->getItems()[$this->position]);
	}
}