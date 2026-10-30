<?php 
class Cliente {
    //atributos:
    public string $nome;
    public int $idade;
    public float $peso;

    public function __construct(string $nome, int $idade, float $peso){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->cadastrar();
    }

    public function cadastrar(){
        echo "Cliente {$this->nome} cadastrado com sucesso!<br>";
    }

    public function mostrarDados(){
        echo "\nDados do cliente: <br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Peso: " . $this->peso . "<br>";
    }
}

// Insere um Novo Cliente
$c1 = new Cliente("Gazola", 16, 67);
// Demonstra a Função
$c1->mostrarDados();

$c2 = new Cliente("caucio", 22, 822);
$c2->mostrarDados();

// Sem método da function __construct
// $c2 = new Cliente();
// $c2->nome = "gazola";
// $c2->idade = 16;
// $c2->peso = 80;
// $c2->mostrarDados();

?>


<?php
require_once 'Cliente.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$c1 = new Cliente($_POST['nome'], $_POST['idade'], $_POST['peso']);}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <form method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id=""><br>
        <label for="idade">Idade: </label>
        <input type="number" name="idade" id=""><br>
        <label for="peso">Peso: </label>
        <input type="number" name="peso" id="" steps=0.5><br>
        <input type="submit" value="cadastrar">
    </form>
    <?php
    if(isset($c1)){
    $c1->mostrarDados();
    }
    ?>
</body>
</html>

