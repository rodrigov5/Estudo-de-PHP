<?php



$idade = 18;
$acompanhado = false;


echo "Você só pode entrar se tiver mais de 18 anos ou." . PHP_EOL;
echo "a partir de 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos, poder entrar." . PHP_EOL;
} else if ($idade < 18 && $acompanhado == true) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "E está acompanhado(a), então pode entrar." . PHP_EOL;
} else {
    echo "Você só tem $idade anos." . PHP_EOL;
    echo "E não está acompanhado(a)." . PHP_EOL;
    echo "Então não pode entrar." . PHP_EOL;
}

echo "Adeus!" . PHP_EOL;