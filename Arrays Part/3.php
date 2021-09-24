<?php


function sumOfArray($array,$sum = 0): int
{
    if ($array[0]) { // I wanted to avoid using is_array because it is built in function:) There are plenty of warnings but still works
        foreach ($array as $item) {
            if ($item[0]) {
                return sumOfArray($item, $sum);
            } else {
                $sum += $item;
            }
        }
    }

    return $sum;
}

$result = sumOfArray([1,2,3,[4,5,6,[7,8,9]]]);

echo "\nResult is $result\n";
