<?php

/* Команда — это поведенческий паттерн проектирования, 
который превращает запросы в объекты, позволяя передавать их как аргументы при вызове методов, 
ставить запросы в очередь, логировать их, а также поддерживать отмену операций. */

use Command\Command1, Command\Command2;
use Receiver\Receiver;
use Invoker\Invoker;

require __DIR__ . '/vendor/autoload.php';

$invoker = new Invoker();
$invoker->com1(new Command1("Здрасьте=)"));
$receiver = new Receiver();
$invoker->com2(new Command2($receiver, 15, 20));

$invoker->doSomething();
