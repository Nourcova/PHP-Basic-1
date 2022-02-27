<?php
$num = readline("Enter the number of starts to display as Z: ");
for ($i = 0; $i < $num; $i++) {
    if ($i == 0 || $i == $num - 1) {
        for ($j = 0; $j < $num; $j++) {
            echo ("*");
        }
        echo ("\n");
    } else {
        for ($j = 0; $j < $i; $j++) {
            echo (" ");
        }
        echo ("*\n");
    }
}
