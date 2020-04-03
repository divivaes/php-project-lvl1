<?php

namespace BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Games\EvenGame\checkEvenOrNot;
use function BrainGames\Games\CalcGame\calc;

function start($game)
{
	if ($game === "brain-even") {
		checkEvenOrNot();
	} elseif ($game === "brain-calc") {
		calc();
	}
}