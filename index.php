<?php

/* class MyIterator implements Iterator
{
	private $collection;
	private $position = 0;

	public function __construct($collection)
	{
		$this->collection = $collection;
	}

	public current(): mixed
	{

	}
public function key(): mixed
{

}
public function next(): void
{

}
public function rewind(): void
{

}
public function valid(): bool
{

}
} */


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

class Iterator2 extends Iterator1
{

}


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

	public function getIterator(): Iterator
	{
		return new Iterator1($this);
	}

	public function getReverseIterator(): Iterator
	{
		return new Iterator1($this, true);
	}
}


$collection = new Collection1();
$collection->addItem("Один");
$collection->addItem("Два");
$collection->addItem("Три");

echo "Обычный обход:<br>";
foreach ($collection->getIterator() as $item) {
	echo $item . "<br>";
}

echo "<br>";
echo "Обратный обход:<br>";
foreach ($collection->getReverseIterator() as $item) {
	echo $item . "<br>";
}