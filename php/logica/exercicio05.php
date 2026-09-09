<?php 
/*5. Verificação de notas: Crie um programa que peça ao usuário para inserir sua nota em uma prova e imprima se ele foi aprovado ou reprovado (considerando que a nota mínima para aprovação é 7).*/

//diga o hello echo
echo("bem vindo ao consulte sua nota\n");
//criar a variavel nota int e input
$nota = (float) readline("Digite a sua nota: ");

// se a nota for menor que 7 echo reprovou
if ($nota < 7){
    echo("voce reprovou com $nota de nota, REPROVADO");
}
// elseif se a nota for maior que 7 aprovado com tal nota
elseif ($nota > 6) {
    echo("Parabens voce passou com $nota de nota APROVADO");
}



?>