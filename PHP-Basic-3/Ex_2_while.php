<?php
$num=readline("Enter a number to calculate its factoriel: ");
$counter=1;
$result = 1;

while($counter<=$num){
    $result*=$counter;
    $counter++;
}
echo($result."\n");