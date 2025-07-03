<?php

echo "Bem Vindo(a) ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor: Ragnark";
$nomeFilme = "Se beber não case";
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
    echo "Esse filme é um lançamento\n";
} elseif($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Esse filme ainda é novo\n";
}
else{
    echo "Esse filme não é um lançamento";
}

$genero = match ($nomeFilme) {
    // match serve para comparar algo atribuindo caso encontre, uma equivalencia
    // sem filme tiver Top Gun - Maverick atribui a ele o genero Ação
    // Caso seja somente Top Gun, ele retorna o valor do default, ou seja as strings nesse casa tem que ser iguais
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-Heroi",
    "Se beber não case" => "Comédia",
    default => "Genero Desconhecido"
};

echo "O genero do filme é: $genero";