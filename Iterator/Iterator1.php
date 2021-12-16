<?php

namespace MyIterator;
use Iterator;

class Iterator1 implements Iterator
{

	protected $collection;
	protected $position = 0;
	protected $reverse = false;

	public function __construct($collection, $reverse = false)
	{
		$this->collection = $collection;
		$this->reverse = $reverse;
	}

	//Возвращает итератор на первый элемент.
	public function rewind(): void
	{
		$this->position = $this->reverse ? count($this->collection->getItems()) - 1 : 0;
	}

	//Возврат текущего элемента.
	public function current()
	{
		return $this->collection->getItems()[$this->position];
	}

	//Возвращает ключ текущего элемента.
	public function key()
	{
		return $this->position;
	}

	//Переходит к следующему элементу.
	public function next(): void
	{
		$this->position = $this->position + ($this->reverse ? -1 : 1);
	}

	//Проверяет корректность текущей позиции.
	public function valid(): bool
	{
		return isset($this->collection->getItems()[$this->position]);
	}
}