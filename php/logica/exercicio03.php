<?php 
/*3. Verificação de divisibilidade: Crie um programa que peça ao usuário para inserir dois números e verifique se o primeiro número é divisível pelo segundo.*/

//imprimir as boas vindas
echo("Bem vindo ao seu numero divisivel\n");


//variavel n1 numero int e input insera o numero
$numero = (int) readline("Digite um numero: ");

//variavel n2 numero int e input inserir o valor
$divisor = (int) readline("Digite o numero do divisor: ");

//se o n1 é divisivel e igual igaul a 0 e imprimri o resultado
if ($numero % $divisor === 0){
    echo "$numero é divisivel por $divisor.";
} else {
    echo "$numero NÃO é divisivel por $divisor.";
}
//se nao  nao é divisivel



?>