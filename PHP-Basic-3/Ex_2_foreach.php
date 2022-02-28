<?php
$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);

foreach($transactions as $small_array){
    $result = "id: ${small_array['id']} name: ${small_array['name']} email: ${small_array['email']}";
    echo $result.PHP_EOL;
}
