<?php

/* Посредник — это поведенческий паттерн проектирования, 
который позволяет уменьшить связанность множества классов между собой, 
благодаря перемещению этих связей в один класс-посредник. */

use Component\Component1, Component\Component2;
use Mediator\concreteMediator;

require __DIR__ . '/vendor/autoload.php';

$c1 = new Component1();
$c2 = new Component2();
$mediator = new concreteMediator($c1, $c2);

$c1->input(5, 10);