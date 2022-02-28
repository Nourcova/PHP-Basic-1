<?php
// $array1 = array("Ibrahim" => "Nour", "Ahmad" => "Katrib", "Zaynab" => "Abdl nabi");
$array2 = array(
    array(
        "id"=>1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id"=>2,
        "debit"=>15,
        "credit"=>10
    )
);

// foreach ($array1 as $first_name => $last_name) {
//     echo "$first_name=$last_name\n";
// }

foreach($array2 as  $small_array){
        $result = abs($small_array["debit"] - $small_array["credit"]);
        echo($result."\n");
}
