<?php

namespace Mediator;

interface Mediator
{
	public function notify(object $sender, array $arr): void;
}