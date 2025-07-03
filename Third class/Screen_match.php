<?php

echo "Bem Vindo(a) ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$qtndDeNotas = $argc - 1;
$notas = [];
for ($contador = 1; $contador < $argc; $contador++){
    $notas[] = (float) $argv[$contador];
}
$somaDeNotas = 0;
for($i = 0; $i < count($notas); $i++){
    $somaDeNotas += $notas[$i];
}


$notaFilme = $somaDeNotas / $qtndDeNotas;
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

echo "O genero do filme é: $genero\n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" =>7.8,
    "genero" => "super-heroi",
];

echo $filme["ano"];