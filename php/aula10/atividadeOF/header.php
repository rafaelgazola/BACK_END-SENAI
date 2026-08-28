<?php
//exemplo dado em aula
session_start();

//exp do cookie passado so q setado para 1hora
setcookie("empresa", "zola.CO", time() + 15);
?>
<header>
    <h1>Este é o Header</h1>  <!-- so para mostrar o header-->
    <hr>
</header>