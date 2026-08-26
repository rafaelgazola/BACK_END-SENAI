<?php //calculador de resultado de gasto de funcionario
$remune = 6767; // valor do salario individual
//utiliza o for para fazer um laço de repetição repetir 67 vezes
for ($i = 1; $i <= 67; $i++) {
    $custo_acumulado = $i * $remune; // calcula o total gasto ate aquele funcionario

    echo "numero do funcionario: $i | salario: R$ $remune | custo acumulado: R$ $custo_acumulado <br>";

    if ($i == 67) { // se imprimir tudo basicamente dar essa notificaçao
        echo "<br><strong>AVISO: todos os 67!!! funcionarios foram processados!!!</strong><br>";
    }
}
?>
