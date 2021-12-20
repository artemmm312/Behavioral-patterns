<?php

/* Снимок — это поведенческий паттерн проектирования, 
который позволяет сохранять и восстанавливать прошлые состояния объектов, 
не раскрывая подробностей их реализации. */

use Originator\Originator;
use Caretaker\Caretaker;

require __DIR__ . '/vendor/autoload.php';

$originator = new Originator(13);
$caretaker = new Caretaker($originator);

$caretaker->backup();
$originator->calculation();

$caretaker->backup();
$originator->calculation();

$caretaker->backup();
$originator->calculation();

$caretaker->showHistory();

echo "Откатываемся на передыдущее состояние<br>";
$caretaker->undo();

echo "Ещё раз откатываемся на предыдущее состояние<br>";
$caretaker->undo();