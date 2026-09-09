<?php 
/*4. Verificação de temperatura: Crie um programa que peça ao usuário para inserir uma temperatura e verifique se está frio, agradável ou quente.*/

//boas vindas para o user echo
echo("Bem vindo ao termometro de clima\n");
//variavel temp, numero int, e o input
$temp = (int) readline("Digite uma temperatura: ");
// se a temp estiver maior que 26 graus é quente

if ($temp > 26){
    echo("A temperatura de $temp graus esta QUENTE");
}
// se estiver menor que 19 é frio
elseif ($temp < 19){
    echo("A temperatura de $temp graus esta FRIO");
}
// elseif estiver  entre 20 && 25 imprimi esta agradavel
elseif ($temp >= 19 && $temp <= 26){
    echo("A temperatura de $temp graus esta AGRADAVEL");
}

?>