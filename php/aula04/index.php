<?php

echo "Bem vindo a empresa Zolas<br>";  // coloquei o echo para colocar o nome da empresa

$fat1 = 200; // declarei a variavel com o valor
$fat2 = 350; // igual declarei o faturamento do segundo mes

echo "O faturamento do primeiro mês da empresa ZOLAS foi de: " . $fat1 . "<br>";  //aqui seria para mostra o faturamento do primeiro mes chamando a variavel
echo "Já o faturamento do segundo mês foi de: " . $fat2 . "<br>"; // mesma coisa mostrando a segunda variavel
echo "O resultado dos dois meses de faturamento é: " . ($fat1 + $fat2) . "<br>"; // aqui era para somar as duas variaveis e ver conto que da os dois meses

$mediaFat = ($fat1 + $fat2) / 2; // defini outra variavel para mostrar a media
$mediaFat >= 275; // se der esse valor que é a media

echo "Com a media de faturamento dado é um valor BOM?" . "<br>";

echo $mediaFat ? "SIM" : "Não"; //e aqui em boleano, para dizer se com o valor da media é bom, sim ou não
