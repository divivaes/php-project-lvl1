<?php

namespace BrainGames\GameEngine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Games\EvenGame\checkEvenOrNot;
use function BrainGames\Games\CalcGame\calc;
use function BrainGames\Games\GCDGame\gcd;

function start($game)
{
    switch ($game) {
        case 'brain-even':
            checkEvenOrNot();
            break;
        case 'brain-calc':
            calc();
            break;
        case 'brain-gcd':
            gcd();
            break;
    }
}
