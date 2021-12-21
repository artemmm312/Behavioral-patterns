<?php

/* Состояние — это поведенческий паттерн проектирования, 
который позволяет объектам менять поведение в зависимости от своего состояния. 
Извне создаётся впечатление, что изменился класс объекта. */

use Context\Context;
use State\State, State\State1, State\State2;

require __DIR__ . '/vendor/autoload.php';

//ClientCode
$context = new Context(new State1());
$context->request1();
$context->request2();