<?php
echo "--------------------------------------------------\n";
$nome = "Gusta Oliver";
$nota = (7 + 7 + 7) / 3 ;
$metroCenti = 5 * 100;
$ano = 2024;
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "$ano é bissexto.\n";
} else {
    echo "$ano não é bissexto.\n";
}

$tempCel = 30.4;
$tempFah = $tempCel * 1.8 + 32;


echo "Meu nome é: $nome\n";
echo "A média é: $nota\n";
echo "5 metros em centimentos são $metroCenti centimentros\n";
echo "A temperatura em $tempCel Celsius, equivale a $tempFah Fahrenheit\n";