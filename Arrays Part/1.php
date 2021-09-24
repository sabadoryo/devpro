<?php

$str = "Hello World!";
$reversedStr = "";

$i = 0;
$count = -1;

while (isset($str[$i])) { //are not allowed to use php built in functions so counting length here...
    $count++;
    $i++;
}

for ($i = $count; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}

echo $reversedStr;
