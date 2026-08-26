<?php
// lista simples de setores da empresa, array indexado
$setores = ["ti", "rh", "vendas"];

foreach ($setores as $s) {
    echo "setor: $s <br>";
}

echo "<hr>";
// dados de um funcionario array de um funcionario especifico
$funcionario = [
    "nome" => "gazola",
    "cargo" => "analista"
];

echo "nome: " . $funcionario["nome"] . " - cargo: " . $funcionario["cargo"] . "<br>";



// lista com varios funcionarios Array associativo a varios funcionarios
$lista = [
    ["casio", "desenvolvedor"],
    ["joao", "gerente"]
];

foreach ($lista as $f) {
    echo "nome: $f[0] - cargo: $f[1] <br>";
}

?>