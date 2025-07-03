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
