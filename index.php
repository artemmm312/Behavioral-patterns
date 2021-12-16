<?php

/* Итератор — это поведенческий паттерн проектирования, 
который даёт возможность последовательно обходить элементы составных объектов, 
не раскрывая их внутреннего представления. */

use Collection\Collection1;

require __DIR__ . '/vendor/autoload.php';

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
