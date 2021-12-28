<?php

/* Посредник — это поведенческий паттерн проектирования, 
который позволяет уменьшить связанность множества классов между собой, 
благодаря перемещению этих связей в один класс-посредник. */

use Component\Component1, Component\Component2;
use Mediator\concreteMediator;

require __DIR__ . '/vendor/autoload.php';

$com1 = new Component1();
$com2 = new Component2();
$mediator = new concreteMediator($com1, $com2);

$com1->input(5, 10);