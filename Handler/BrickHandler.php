<?php

namespace Handler;

class BrickHandler extends AbstractHandler
{
	public function handle(string $request): ?string
	{
		if ($request === "Кирпич") {
			return "Мы можем построить дом из материала '" . $request . "' высотой в 5 этажей.<br>";
		} else {
			return parent::handle($request);
		}
	}
}