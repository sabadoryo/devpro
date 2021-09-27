<?php

$sum = 0;

function sumOfArray($array): int
{
    global $sum;

    if (is_array($array)) {
        foreach ($array as $item) {
            if (is_array($item)) {
                sumOfArray($item);
            } else {
                $sum += $item;
            }
        }
    }

    return $sum;
}

$result = sumOfArray([[1,2,[1]], 1, 2, 3, [4, 5, 6, [7, 8, 9]]]);

echo "\nResult is $result\n";
