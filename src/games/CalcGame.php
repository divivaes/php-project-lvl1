<?php

namespace BrainGames\Games\CalcGame;

use function cli\line;
use function cli\prompt;

function calc()
{
    line('Welcome to the Brain Games!');
    line('What is the result of the expression?');

    $name = prompt('May I have your name?');

    line("Hello, %s!", $name);

    $i = 1;

    while ($i <= 3) {
        $result = generateExpression();
        $answer = prompt("Your answer");

        if ($answer == $result) {
            line("Correct!");
            $i++;
        } else {
            line("%d is wrong answer ;(. Correct answer was %d.", $answer, $result);
            line("Let's try again, %s!", $name);

            exit();
        }
    }

    line("Congratulations, %s!", $name);
}


function generateExpression()
{
    $operators = ['+', '-', '*'];

    $firstNumber = rand(1, 100);
    $secondNumber = rand(1, 100);

    $operator = $operators[rand(0, 2)];

    line("Question: %d %s %d", $firstNumber, $operator, $secondNumber);

    return getResult($firstNumber, $secondNumber, $operator);
}

function getResult($x, $y, $operator)
{
    switch ($operator) {
        case '-':
            return ($x - $y);
        break;
        case '+':
            return ($x + $y);
        break;
        case '*':
            return ($x * $y);
        break;
    }
}






