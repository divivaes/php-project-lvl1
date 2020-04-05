<?php

namespace BrainGames\Games\ProgressionGame;

use function cli\line;
use function cli\prompt;

function missingNumber()
{
    line('Welcome to the Brain Games!');
    line('What number is missing in the progression?');

    $name = prompt('May I have your name?');

    line("Hello, %s!", $name);

    $i = 1;

    while ($i <= 3) {
        $number = generateNumbersRow();
        $answer = (int) prompt("Your answer");

        if ($answer === $number) {
            line("Correct!");
            $i++;
        } else {
            line("%d is wrong answer ;(. Correct answer was %d.", $answer, $number);
            line("Let's try again, %s!", $name);

            exit();
        }
    }

    line("Congratulations, %s!", $name);
}


function generateNumbersRow()
{
    $row = "";

    $firstIndex = rand(1, 100);
    $increaseValue = rand(1, 9);
    $hiddenIndex = rand(0, 9);
    $nextIndex = $firstIndex;

    for ($i = 0; $i <= 10; $i++) {
        if ($hiddenIndex === $i) {
            $row = $row . " ..";
        } else {
            $row = $row . " " . $nextIndex;
        }
        $nextIndex = $nextIndex + $increaseValue;
    }

    $correctIndex = $firstIndex + $increaseValue * $hiddenIndex;

    line("Question: %s", $row);

    return $correctIndex;
}
