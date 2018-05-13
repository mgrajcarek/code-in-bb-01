<?php

namespace CodeInBB;

function fizzBuzz(int $number): string
{
    $result = [];

    if ($number % 3 === 0) {
        $result[] = 'Fizz';
    }

    if ($number % 5 === 0) {
        $result[] = 'Buzz';
    }

    if (empty($result)) {
        return (string) $number;
    }

    return implode(' ', $result);
}

for ($i = 1; $i <= 100; ++$i) {
    echo fizzBuzz($i) . "\n";
}