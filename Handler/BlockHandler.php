<?php

namespace Handler;

class BlockHandler extends AbstractHandler
{
	public function handle(string $request): ?string
	{
		if ($request === "Блок") {
			return "Мы можем построить дом из материала '" . $request . "' высотой в 3 этажа.<br>";
		} else {
			return parent::handle($request);
		}
	}
}

