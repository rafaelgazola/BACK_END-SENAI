<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form </title>
</head>

<body>
    <header>
        <h1>Meu site da minha empresa MR Beast</h1>
    </header>
    <main>
        <section>
            <form action="./producao.php" method="POST"> <!-- chamando o arquivo q esta o PHP-->
                <label for="nome">Nome: </label><br>     <!-- campo do nome -->
                <input type="text" name="nome" id="nome"><br> <!-- tipo do campo -->

                <label for="email">Email: </label><br> <!--campo email -->
                <input type="email" name="email" id="email"><br>

                <label for="telefone">Telefone: </label><br> <!--campo telelefone -->
                <input type="tel" id="telefone" name="tele" class="input-padao" required placeholder="(xx) xxxxx-xxxx"><br><br> <!--pesquisei modelo para deixar o telefone -->

                <label for="senha">Senha do seu BANCO: </label><br> <!--senha do banco campo -->
                <input type="password" name="senha" id="senha"><br><br>

                <input type="reset" value="Limpar">  <!-- lipar formulario -->
                <input type="submit" value="Enviar">  <!-- enviar -->
            </form>
            <hr>

        </section>
    </main>
</body>

</html>