<?php

for($contador = 0; $contador < 100; $contador++){
    $numImpar = (2*$contador)+1;
    if($numImpar >= 100){
        break;
    }
    echo "$numImpar\n";
}

echo "\n---------------------------------------------------\n\n";

$altura = $argv[1];
$peso = $argv[2];

$imc = $peso / ($altura*$altura);
$resultado = number_format($imc,2);


if ($resultado <= 20){
    echo "Magro. \nIMC: $resultado";
}elseif($resultado > 20 && $resultado <80){
    echo "Saudavel. \nIMC $resultado";
} else{
    echo "Acima do peso. \nIMC: $resultado";
}

echo "\n\n---------------------------------------------------\n\n";

$hora = 00;
if($hora >= 06 && $hora < 12){
    echo "Bom dia";
}elseif($hora >= 12 && $hora < 18){
    echo "Boa tarde";
}else{
    echo "Boa noite";
}
