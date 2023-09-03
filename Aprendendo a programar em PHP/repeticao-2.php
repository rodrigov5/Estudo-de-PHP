<?php

for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        echo "#Treze" . PHP_EOL;
        continue;
    }
    echo "#$contador" . PHP_EOL;
}