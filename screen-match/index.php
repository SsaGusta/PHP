<?php

require __DIR__ ."src/Modelo/Filme.php"
require __DIR__ . "/src/Modelo/Filme.php"

echo "Bem vindo ao ScreenMatch\n"

$filme = new Filme();
$filme ->nome = 'Thor - Ragnarok';
$filme ->anoLancamento = 2021;
$filme -> genero = 'super-heroi'

$filme ->avalia(10);
$filme ->avalia(10);
$filme ->avalia(10);
$filme ->avalia(10);


var_dump($filme);

echo $filme -> media();