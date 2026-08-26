<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quebrar Senha</title>
</head>
<body>

    <form action="" method="POST">
        <label for="senha">Senha: </label>
        <input type="text" name="senha" id="senha">
        <input type="submit" value="Quebrar!">
    </form>

    <hr>

    <?php
    if (isset($_POST["senha"]) && $_POST["senha"] !== "") {
        $senha = $_POST["senha"];
        $atual = 0;
        while ($atual != $senha) {
            echo "Tentando senha: " . $atual . "<br>";
            $atual++;
        }

        echo "Senha descoberta: " . $atual ;
    }
    ?>

</body>
</html>