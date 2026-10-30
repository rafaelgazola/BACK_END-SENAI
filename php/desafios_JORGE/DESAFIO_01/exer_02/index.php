<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>
</head>

<body>

    <header>
        <h1>Sorteador</h1>
        <h3>Sorteador de 17 a 32</h3>
        <hr>
    </header>

    <main>
        <form method="POST">
            <?php
            // Verifica se o formulário foi enviado
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $min = 17;
                $max = 32;
                $numero_sorteado = rand($min, $max);

                // Exibe o número sorteado
                echo "<h2>Número sorteado: $numero_sorteado</h2>";
            }
            ?>

            <button type="submit" name="sortear">Sortear</button>
        </form>
    </main>

</body>

</html>