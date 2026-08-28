<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
</head>
<body>
    <?php 
    // mostra no topo onde ta o header
    require_once 'header.php';

    // salva o usuario na sessao no caso gazola
    $_SESSION["user"] = "Gazola";
    echo "<p>Usuario armazenado na sessao!</p>";
    ?>

    <p>Pagina principal do sistema.</p>
    
    <a href="pag2.php">Acesse a pagina 2</a>   <!-- Acessa a outra pagina -->

    <?php 
    // inclui o rodapé chamamndo o arquivo
    include 'footer.php';
    ?>
</body>
</html>