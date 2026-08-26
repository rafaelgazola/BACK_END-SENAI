<?php

$alunos = ["timoteo", "nicolas", "kauan", "breno", "filipe"];
//echo $alunos[2];

for($i=0; $i<count($alunos); $i++){
    echo "Alunos: $alunos[$i]<br>";
}

echo "<hr>";
foreach($alunos as $a){
    echo "Aluno $ <br>";
}

$profissao = [
    ["jorge", 29, "instrutor"],
    ["danadai", 33, "instrutor"]
];
echo "<hr>";
foreach($profissao as $p){
    echo"Nome: $p[0] Idade: $p[1], Cargo: $p[2]<br>";
} 

echo "<hr>";

$dic = [
	"nome" => "Ana",
	"idade" => 29,
	"cargo" => "gazola"
];

echo $dic["idade"];
?>