<?php

$myarray = array(
      
    // Default key for each will
    // start from 0
   "eggs" => array("balade", "mazare3"),
   "milk"=> array("Fresh", "Taanayel"),
   "water-pack" => array("Tanoureen", "Reem")
);
      
// Display the array information
print_r("Hey sir, I need 1 pack of ".$myarray["eggs"][0]." ".key($myarray)." and 3 ".$myarray["water-pack"][1]." "."Water Pack\n");
?>