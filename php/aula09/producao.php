<?php
// mostrao nome se ele tiver sido enviado pelo formulario
if (isset($_POST["nome"])) {
    echo "Seja bem vindo " . $_POST["nome"] . "<br>";
}

// mostra o email se ele tiver sido enviado pelo formulario
if (isset($_POST["email"])) {
    echo "Seu email é: " . $_POST["email"] . "<br>";
}

// ele mostra o telefone se ele tiver sido enviado pelo formulario
if (isset($_POST["tele"])) {
    echo "Seu número é: " . $_POST["tele"] . "<br>";
}

// mostra a senha se ela tiver sido enviada pelo formulario
if (isset($_POST["senha"])) {
    echo "O numero do seu banco é (bem seguro): " . $_POST["senha"] . "<br>";
}
?>