<?php

$text = "learning PHP is PHP based on something";
$wordToSearch = "PHP";
echo (count(explode($wordToSearch,$text))-1);
