<?php

$examplePerfectRow = ":)(((:(;);(";
$exampleWrongRow = ":):);):((((:(";

$randomRow = "Hello))) World(, test string(((((";

$row = $exampleWrongRow; //change here to test

if (isValidRow($row)) {
    echo 'Given row is valid!';
    echo $row;
} else {
    echo 'Given row is invalid, doing reformatting';
    $result = makeValidRow($row);
    echo($result);
}

function makeValidRow($row): string
{
    $arr = str_split($row);
    $perfectRow = "";

    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        if ($arr[$i] == ':' || $arr[$i] == ';') {
            if ($arr[$i + 1] == ')' || $arr[$i + 1] == '(') {
                $perfectRow .= $arr[$i].$arr[$i + 1];
            }
        }
    }

    return $perfectRow;
}

function isValidRow($row): bool
{
    $pattern = '/:\(|:\)|;\(|;\)/';

    $strLength = strlen($row);

    preg_match_all($pattern, $row, $matches);

    return (count($matches[0]) * 2) == $strLength; // if row is perfect no need to do reformatting
}

