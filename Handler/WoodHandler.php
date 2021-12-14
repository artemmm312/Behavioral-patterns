<?php

namespace Handler;

class WoodHandler extends AbstractHandler
{
	public function handle(string $request): ?string
	{
		if ($request === "Дерево") {
			return "Мы можем построить дом из материала '" . $request . "' высотой в 2 этажа.<br>";
		} else {
			return parent::handle($request);
		}
	}
}