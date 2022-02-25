<?php
function pythonToPhp($word){
    $newWord = str_replace("PHP","Python", $word);
    return $newWord;
}

echo pythonToPhp("Hello PHP users, we love PHP and we love Python");