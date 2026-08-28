<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <?php 
    // inclui o topo
    include 'header.php';

    // le os dados da sessao q foi passado
    echo "<h2>Seja bem vindo: " . $_SESSION['user'] . "</h2>";

    // vai ler o cookie criado
    if (isset($_COOKIE["empresa"])) {
        echo "<p>Empresa no Cookie: " . $_COOKIE["empresa"] . "</p>";
    }
    ?>

    <br>
    <a href="index.php">Voltar</a>    <!-- para voltar a pagina-->

    <?php 
    // vai incluir no rodapé
    include 'footer.php';
    ?>
</body>
</html>