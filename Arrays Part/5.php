<?php

include '2.php';

$textFromSecondTask = $text;

function getUniqueWords(string $text): array
{
    $collection = countWordsInText($text); // reusing text and function from second task.

    $uniqueWords = [];
    foreach ($collection as $word => $times) {
        if ($times == 1) {
            $uniqueWords[] = $word;
        }
    }
    return $uniqueWords;
}

var_dump(getUniqueWords($textFromSecondTask));
