<?php 
//função simples sem argumento
function exibeMsg(){
    echo "sou uma função";
}

exibeMsg();
echo "<hr>";

function exibeMsgArg($msg){
    echo $msg;
}
exibeMsgArg("Sou o argumento");

echo "<hr>";

function soma($a,$b){
    echo $a+$b;
}

soma(2,2);

function verificaIdade($i){
    //uso de return para calculos ou numeros e usa echo para mesagens
    if($i>=18){
        echo "Voce pode tirar CNH<br>";
    }else{
        echo "Ainda não pode tirar CNH<br>";
    }
}
verificaIdade(16);
verificaIdade(19);
echo "<hr>";
function pares($a){
    for ($i=1; $i<$a; $i++) {
        if($i%2==0){
        echo "Contando... $i<br>";
        }
    }
}
pares(2000);
echo "<hr>";

function impares($a){
    for ($i=1; $i<$a; $i++) {
        if($i%2!=0){
        echo "Contando... $i<br>";
        }
    }
}
impares(2000);
?>