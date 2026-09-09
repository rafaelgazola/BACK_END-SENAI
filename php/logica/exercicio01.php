<?php 
/*
1. Verificação de idade: Crie um programa que peça ao usuário para inserir a sua idade e verifique se ele é menor de idade, adulto ou idoso.
*/

//imprimi oq o programa faz
echo("\nBem vindo ao programa de calcular a idade\n");

//precisa receber a idade variavel
$idade = (int) readline("\nDigite uma idade: ");


// se a idade for maior que 65/ e dps imprimir x idade fala vc é senior
if ($idade > 65){
    echo("idade: $idade voce é senior");
} 

// se a idade for maior que 21 vc é adulto
elseif($idade > 21){
echo("idade: $idade voce é adulto");
}

//se nao sua idade é idade vc ainda é criança

else
    echo("idade: $idade voce ainda é criança") 
?>