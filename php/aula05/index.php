<?php 
// dados da Empresa Zolas tipo primeiras variaveis
$funcionarios = 45;   // quantidade de funcionarios
$mediaFat = 275;      // media de faturamento
$setor = "TI";        // setor da empresa

echo "Empresa Zolas<br>"; // echo com nome da empresa

// tipo de decisão para definir de é de que tipo de porte
if ($funcionarios < 50) {          // definido como pequeno porte
    echo "Porte: pequeno<br>";
} elseif ($funcionarios < 100) {   // definido para medio porte
    echo "Porte: medio<br>";
} else {
    echo "Porte: grande<br>";      // e grande porte
}

// decisão de desnpenho da empresa
if ($mediaFat >= 250) {             //seriam dois esse como desenpenho bom maior que 250
    echo "Faturamento: bom<br>";
} else {
    echo "Faturamento: baixo<br>";  //e desenpenho baixo poque se nao vai ser baixo
}

// aqui seria basicamente para para definir o setor q se enquadra
switch ($setor) {
    case "TI":
        echo "Setor: tecnologia<br>";
        break;
    case "RH":
        echo "Setor: recursos humanos<br>";
        break;
    case "MT":
        echo "Setor: metalurgica<br>";
        break;
    default:
        echo "Setor: outro<br>";
        break;


}
?>