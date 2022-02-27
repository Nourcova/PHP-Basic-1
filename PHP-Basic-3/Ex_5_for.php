<?php
$str = readline("Enter your String here to reverse it: ");
$reversedStr="";
for ($i=strlen($str)-1;$i>=0; $i--){
    $reversedStr=$reversedStr.$str[$i];
}
echo($reversedStr.PHP_EOL);