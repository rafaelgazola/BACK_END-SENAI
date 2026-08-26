<?php

// funcao 1 mensagem simples com parametro
function mensagem($nome) {
    echo "bem vindo $nome <br>";
}

// funcao 2 calcula e retorna um valor
function somar($a, $b) {
    return $a + $b; // passado na aula
}
// chamando a primeira funcao com os nomes
mensagem("gazola"); // duas mensagens
mensagem("casio");

echo "<hr>"; // apenas uma linha 

// chamando a segunda funcao com return
$resultado = somar(10, 20);
echo "resultado: $resultado <br>";  //imprimindo o resultado esperado

?>