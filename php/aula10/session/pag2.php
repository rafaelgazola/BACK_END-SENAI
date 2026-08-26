<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <?php 
    session_start();
    echo "Seja bem vindo: " . $_SESSION['user'] ;
    ?>

    <a href="index.php">Voltar</a>

</body>
</html>