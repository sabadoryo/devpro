<?php

$sentence = "DO you used to call me on my cell phone?";

$arr = explode(' ', $sentence);

$jokeSentence = "";
foreach ($arr as $item) {
    $wordLen = strlen($item);

    for ($i = 0; $i < $wordLen; $i++) {
        if (ctype_alpha($item[$i])) {
            $ascii = ord($item[$i]);
            if (ctype_upper($item[$i])) {
                var_dump($ascii);
                if ($ascii < 77) {
                    $mirrorAscii = 90 - (13 - (77 - $ascii)) + 1;
                } else {
                    $mirrorAscii = 65 + (13 - ($ascii - 77));
                }
            } else {
                if ($ascii < 109) {
                    $mirrorAscii = 122 - (13 - (109 - $ascii)) + 1;
                } else {
                    $mirrorAscii = 97 + (13 - ($ascii - 109));
                }
            }
            $jokeSentence .= chr($mirrorAscii);
        } else {
            $jokeSentence .= $item[$i];
        }
    }
    $jokeSentence .= ' ';
}

echo $jokeSentence;
