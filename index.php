<?php

/* Наблюдатель — это поведенческий паттерн проектирования, 
который создаёт механизм подписки, позволяющий одним объектам следить 
и реагировать на события, происходящие в других объектах. */

use MySubject\Subject;
use MyObserver\ConcreteObserver1, MyObserver\ConcreteObserver2;


require __DIR__ . '/vendor/autoload.php';

$subject = new Subject();

$o1 = new ConcreteObserver1();
$subject->attach($o1);

$o2 = new ConcreteObserver2();
$subject->attach($o2);

$subject->calculation();
$subject->calculation();

$subject->detach($o2);

$subject->calculation();
