<?php

namespace Component;

class Component2 extends BaseComponent
{
	public function operation(array $arr)
	{
		echo "Обработка данных...<br>";
		$a = $arr[0];
		$b = $arr[1];
		$result = $a + $b;
		return $result;
	}
}