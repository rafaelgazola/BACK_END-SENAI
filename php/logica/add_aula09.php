<?php
// O que faz
echo "Este programa soma uma lista de valores. ";
//Cria uma lista
$lista = [];
do{
    //Pedir um valor para o usuario ou 0 para SAIR.
    $usuario = (float)readline("\nInsira um valor ou 0 para SAIR: ");
    //adicionar a lista
    if($usuario != 0){
        array_push($lista, $usuario);
    }
}while($usuario != 0);
//exibir a lista
//print_r($lista);
foreach($lista as $valor){
    echo "\nValor: ".$valor;
}
//somar lista e mostro o resultado
echo "\nA soma da lista: ". array_sum($lista)."\n";
?>