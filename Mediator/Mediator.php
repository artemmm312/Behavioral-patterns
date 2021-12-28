<?php

namespace Mediator;

use Component\BaseComponent;

interface Mediator
{
	public function notify(BaseComponent $sender, array $arr): void;
}