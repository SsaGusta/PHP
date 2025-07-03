<?php
$contador = 0;
$numTotal = 100;
$numImpar = 1;

for($contador = 0; $contador < $numTotal; $contador++){
    $numImpar += 2;
    if($numImpar >= $numTotal){
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
}elseif($resultado > 20 || $resultado <80){
    echo "Saudavel. \nIMC $resultado";
} else{
    echo "Acima do peso. \nIMC: $resultado";
}

echo "\n\n---------------------------------------------------\n\n";


