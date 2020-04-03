<?php

namespace BrainGames\Games\GCDGame;

use function cli\line;
use function cli\prompt;

function gcd()
{
    line('Welcome to the Brain Games!');
    line('Find the greatest common divisor of given numbers.');

    $name = prompt('May I have your name?');

    line("Hello, %s!", $name);

    $i = 1;

    while ($i <= 3) {
        $number = generateNumber();
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


function generateNumber()
{
    $firstNumber = rand(1, 100);
    $secondNumber = rand(1, 100);

    line("Question: %d %d", $firstNumber, $secondNumber);

    return findGCD($firstNumber, $secondNumber);
}


function findGCD($a, $b)
{
    while ($a !== $b) {
        if ($a > $b) {
            $a = $a - $b;
        } else {
            $b = $b - $a;
        }
    }
    return $a;
}
