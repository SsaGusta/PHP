<?php

require __DIR__ . "/funcoes.php";

echo "Bem Vindo(a) ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$qtndDeNotas = $argc - 1;
$notas = [];
for ($contador = 1; $contador < $argc; $contador++){
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $qtndDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);


echo "Nome do filme: $nomeFilme\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano do filme: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

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
echo "\n";
echo json_encode($filme);
var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-heroi"}'));