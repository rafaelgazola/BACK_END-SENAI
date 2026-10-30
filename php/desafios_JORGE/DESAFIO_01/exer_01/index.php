    <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: darkblue;
        }
        header h1 {
            text-align: center;
            color: lightgray;
        }

        main {
            background-color: lightgray;
            text-align: center;
            width: 30%;
            margin: auto;
            border: 2px solid black;
            border-radius: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
    <title>Antecessor Sucessor</title>
</head>

<body>
    <header>
        <!--O que faz-->
        <h1>Analisa Antecessor e Sucessor.</h1>
    </header>
    <main>
        <div>
            <!--Receber numero-->
            <form action="" method="post">
                <label for="num">Digite um numero: </label><br>
                <input type="number" name="num" id="num" required>
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $num = $_POST['num'];
                //Mostrar numero
                echo "<hr>";
                echo "Numero: $num<br>";
                //Mostrar numero -1
                echo "Ancetecessor: " . $num - 1 . "<br>";
                //Mostrar numero +1
                echo "Sucessor: " . $num + 1 . "<br>";
            }
            ?>
        </div>
    </main>
</body>

</html>