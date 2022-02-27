<?php
function isPalindrome($num){
    $notPlaindrome = false;
    $len = strlen(($num));

    for($i=0;$i<$len/2;$i++){
        if($num[$i]!=$num[$len - 1 -$i])
        return false;
    }
    return true;
}
echo(isPalindrome("aabbaa"));