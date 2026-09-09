<?php 
/*2. Comparações de números: Crie um programa que peça ao usuário para inserir dois números e diga qual deles é maior, ou se são iguais.*/

//imprimi os boa vindas ao user
echo("bem vindo ao programa dos numeros\n");


//variavel numero 1 e int e o input
$n1 = (int) readline("Digite o primeiro numero: ");
//variavel n2 e int e input
$n2 = (int) readline("Digite o segundo numero: ");


// se n1 é maior que n2 echo q é maior
if ($n1 > $n2){
    echo("O Primeiro numero é maior ");
}
// else n2 é maior que n1 eacho q é maior
elseif ($n2 > $n1){
    echo("O Segundo numero é maior");
}
// else n1 e n2 sao iguas echo iguais 
else 
    echo("eles sao iguais")

?>