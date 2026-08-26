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
    $_SESSION["user"] = "Gazola";
    echo "Usuario armazenado na seção";
    ?>
    <a href="pag2.php">Pag 2</a>
</body>

</html>