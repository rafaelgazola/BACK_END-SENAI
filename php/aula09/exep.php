<?php
//confere para ver se o nome está vindo do formulário
if (isset($_POST["nome"])){
echo "Seja bem vindo ". $_POST["nome"] . "<br>";
}
//var_dump($_POST);
?>