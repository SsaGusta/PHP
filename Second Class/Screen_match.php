<?php

echo "Bem Vindo(a) ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022;
// Para solicitar valores do terminal usa argv[1](para pegar somente o primeiro indice)

// ?? siginifa que se o operador da esquerda for nulo(noa for inserido pelo usuário),
// retornará a resposta que esta a direita
$notaFilme = 8.8;
$incluidoNoPlano = true;

echo "Nome do filme: $nomeFilme\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano do filme: $anoLancamento\n";

if ($anoLancamento > 2022){
    echo "Esse filme é um lançamento";
} elseif($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Esse filme ainda é novo";
}
else{
    echo "Esse filme não é um lançamento";
}