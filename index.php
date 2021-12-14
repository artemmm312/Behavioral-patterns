<?php

/* Цепочка обязанностей — это поведенческий паттерн проектирования, 
который позволяет передавать запросы последовательно по цепочке обработчиков. 
Каждый последующий обработчик решает, 
может ли он обработать запрос сам и стоит ли передавать запрос дальше по цепи. */

use Handler\Handler, Handler\WoodHandler, Handler\BrickHandler, Handler\BlockHandler;

require __DIR__ . '/vendor/autoload.php';

function clientCode(Handler $handler)
{
	foreach (["Дерево", "Кирпич", "Блок", "Камень"] as $material) {
		echo "Что можно построить из '" . $material . "'?\n";
		$result = $handler->handle($material);
		if ($result) {
			echo "  " . $result;
		} else {
			echo "  " . $material . " - из этого мы не строим.<br>";
		}
	}
}

$wood = new WoodHandler();
$brick = new BrickHandler();
$block = new BlockHandler();

$wood->setNext($brick)->setNext($block);

clientCode($wood);

