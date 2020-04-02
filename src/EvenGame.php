<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;

function checkEvenOrNot()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $name = prompt('May I have your name?');

    line("Hello, %s!", $name);

    $i = 1;

    while ($i <= 3) {
        $number = generateNumber();
        $answer = prompt("Your answer");

        if ($number % 2 === 0) {
            $correctAnswer = "yes";
        } else {
            $correctAnswer = "no";
        }

        if ($answer === $correctAnswer) {
            line("Correct!");
            $i++;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);

            exit();
        }
    }

    line("Congratulations, %s!", $name);
}


function generateNumber()
{
    $number = rand(1, 100);

    line("Question: %s", $number);

    return $number;
}
