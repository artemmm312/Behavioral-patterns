<?php

/* Посетитель — это поведенческий паттерн проектирования, 
который позволяет добавлять в программу новые операции, 
не изменяя классы объектов, над которыми эти операции могут выполняться. */

use Visitor\concreteVisitor;
use Component\Component1, Component\Component2;

require __DIR__ . '/vendor/autoload.php';

//ClientCode
$visitor = new concreteVisitor();
$com1 = new Component1();
$com2 = new Component2();

$com1->accept($visitor);
$com2->accept($visitor);

