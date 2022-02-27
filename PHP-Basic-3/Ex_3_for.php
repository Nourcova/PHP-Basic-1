<?php
$num = readline("Enter the number of stars: ");
for($i=0;$i<$num;$i++){
    for ($j=0;$j<=$i;$j++){
        echo("*");
    }
    echo("\n");
}
for($i=$num;$i>0;$i--){
    for($j=$i;$j>0;$j--){
        echo("*");
    }
    echo("\n");
}

?>
