<?php
function logBasetwo($num){
    if (is_int(log($num,2))){
        return true;
    }
    else{
        return false;
    }
}

  echo logBasetwo(8);