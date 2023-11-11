<?php

$array = [1, 2 ,3 ,4 ,5, 6];

foreach ($array as $key => $item) {
    echo $key . "=>" . $item . PHP_EOL;
}

echo count($array) . PHP_EOL;
