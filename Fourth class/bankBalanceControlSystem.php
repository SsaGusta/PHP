<?php

$saldo = 1_000;
$titularConta = 'Gusta Oliver';

echo "******************\n";
echo "Titular: $titularConta\n";
echo "Saldo atual: R$ $saldo\n\n";
echo "******************\n";

do{
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "******************\n\n";

    echo "Digite uma opçao: ";
    $opcao = fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "******************\n";
            echo "Titular: $titularConta\n";
            echo "Saldo atual: R$ $saldo\n\n";
            echo "******************\n";
            break;
        case 2:
            echo "Qual valor deseja sacar?\n";
            $valorSaque = (float) fgets(STDIN);
            if ($valorSaque > $saldo){
                echo "Saldo insuficiente para saque\n";
                echo "******************\n";

            } else {
                $saldo = $saldo - $valorSaque;
                echo "Saque Realizado com Sucesso\n";
                echo "******************\n";

            }
            break;
        case 3:
            echo "Qual valor deseja depositar?\n";
            $valorDepo = (float) fgets(STDIN);
            if($valorDepo > 0){
                $saldo += $valorDepo;
                echo "Deposito realizado com sucesso\n";
                echo "******************\n";

            }else{
                echo "Insira um valor maior que R$ 0\n";
                echo "******************\n";

            }
            break;
        case 4:
            echo "Até a proxima!\n";
            break;
        default:
            echo "Opção Inválida\n";
            break;
    }
} while ($opcao !=4);