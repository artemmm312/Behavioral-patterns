<?php

/* Шаблонный метод — это поведенческий паттерн проектирования, 
который определяет скелет алгоритма, 
перекладывая ответственность за некоторые его шаги на подклассы. 
Паттерн позволяет подклассам переопределять шаги алгоритма, не меняя его общей структуры. */

use Template\BaseClass, Template\ConcreteClass1, Template\ConcreteClass2;

require __DIR__ . '/vendor/autoload.php';

function clientCode(BaseClass $class)
{
	$class->templateMethod();
}

echo "Клиентский код может работать с разными подклассамит :\n";
clientCode(new ConcreteClass1());
echo "\n";

clientCode(new ConcreteClass2());