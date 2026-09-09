<?php 
/*8. Tabuada de um número: Crie um programa que peça ao usuário para inserir um número e imprima a tabuada desse número.*/

// falar apresentação da tabuada
echo("Bem vindo a tabuada\n");

//varaivel do numero da tabuado
$n1 = (int) readline("insira o numero para ser multiplicado: \n ");

//imprimir a tabuada do numero especifico
for($i = 1; $i <= 10; $i++){
    echo "$n1 x $i = " . ($n1*$i ) . "\n";
}


?>