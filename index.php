<?php

/* Стратегия — это поведенческий паттерн проектирования, который определяет семейство схожих алгоритмов 
и помещает каждый из них в собственный класс, 
после чего алгоритмы можно взаимозаменять прямо во время исполнения программы. */

use Context\Context;
use Strategy\Strategy, Strategy\StrategyAdd, Strategy\StrategySubtract, Strategy\StrategyMultiply;

require __DIR__ . '/vendor/autoload.php';

$contex = new Context(new StrategyAdd);
$contex->executeStrategy(10, 20);

$contex->setStrategy(new StrategySubtract);
$contex->executeStrategy(50, 37);

$contex->setStrategy(new StrategyMultiply);
$contex->executeStrategy(10, 8);
