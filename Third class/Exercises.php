<?php

$numeros = array_unique([1, 2, 2, 3, 4, 4, 5]);
var_dump($numeros);


$notasAlunos = [
    "Gusta" => 7,
];

foreach ($notasAlunos as $aluno => $nota) {
    if ($nota > 6) {
        echo "Aluno $aluno está aprovado.\n";
    } else {
        echo "Aluno $aluno está reprovado.\n";
    }
}


$dadosDaConta = [
      "Nome do Titular" => "Gusta Oliver",
      "Banco" => "Nubank",
      "Numero da Conta" => '0000-7',
      "Saldo" => 120.00,
];

echo "
Titular: {$dadosDaConta['Nome do Titular']}
Banco: {$dadosDaConta['Banco']}
Número da Conta: {$dadosDaConta['Numero da Conta']}
Saldo: {$dadosDaConta['Saldo']}
";


$familiares = [
    "Mae" => "Sandra",
    "Irmã"=> "Manuelle",
    "Irmão"=> "Anthony",
];

$familiares ["Irmão2"] = "Gusta";

print_r ($familiares);
