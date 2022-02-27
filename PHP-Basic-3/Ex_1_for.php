<?php
$number = readline("Enter a number to count its digits: ");
$len = strlen($number);
$result = 0;
for ($i = 0; $i < strlen($number); $i++) {
    $result += $number[$i];
}
echo $result."\n";
