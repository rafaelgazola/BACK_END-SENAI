<!DOCTYPE html>
<html lang="Pt-Br"> <!-- deixe direto para o portgue BRASIL -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GazolaTec</title>  <!--detalhe deixando o nome da empresa na tag no chrome-->
</head>
<body>
    <header align="center"> <!-- para o body deixei o titulo centralizado -->
        <h1>GazolaTec</h1> <!-- utilizando o HTML para titulo -->
    </header> <!-- no cabeçario -->

    <?php  // iniciei o PHP chamando no projeto de HTML/PHP
    echo "Bem vindo a uma empresa focada em Desenvolvimento de PHP<br>"; //echo dizendo um Olá 

    echo "Nos baseamos em paginas PHP <br>"; // echo sobre o que faz + o <br> para espassar 

       $url = "https://www.php.net/";  // linkando o link do PHP EX da empresa como uma variavel
     
    echo '<a href= "'   . $url . '">Clique Aqui</a>'; // acessando a variavel que é o link

    ?>  <!-- e para finalizar o PHP -->       
</body>
</html>