<?php

$randomRow = "Hello))) World(, test string(((((";

$len = strlen($randomRow);

$parenthesisMet = false;
$perfectRow = "";

for ($i = 0; $i < $len; $i++) {
    if ($randomRow[$i] === ')' || $randomRow[$i] === '(') {
        if (!$parenthesisMet) {
            $perfectRow .= $randomRow[$i];
        }
        $parenthesisMet = true;
    } else {
        $perfectRow .= $randomRow[$i];
        $parenthesisMet = false;
    }
}

echo $perfectRow;
