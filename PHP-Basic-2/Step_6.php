<?php
function computeSum($num){
    $sum = 0;
    for ($i = 0; $i<strlen($num); $i++){
        $sum += $num%10;
        $num = $num/10;
    }
    return $sum;
}

echo computeSum(1234);
