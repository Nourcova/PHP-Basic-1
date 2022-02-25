<?php

    function isArmstrong($num){
        $temp = $num;
        $total = 0;
        $rem=0;
        while($temp != 0){
            $rem = $temp % 10;
            $total = $total + $rem * $rem * $rem ;
            $temp = $temp / 10;
        }

        if($num == $total){
            return true;
        }else{
            return false;
        }
    }

    echo(isArmstrong(153)."\n");
