
<?php 
class Produto{
    //atributo
    private string $nome; //armazena o nome do produto
    private float $preco; //armazena o preco do produto

    //metodos:
    public function __construct($n, $p)
    {
        $this->nome = $n; //define o nome ao criar o objeto
        $this->preco = $p; //define o preco ao criar o objeto
    }

    //metodo acessores (getter e setter) para nome
    public function getNome(){
        return $this->nome; //retorna o nome
    }

    public function setNome($n){
        $this->nome = $n; //altera o nome
    }

    //metodo acessores (getter e setter) para preco:
    public function getPreco(){
        return $this->preco; //retorna o preco
    }

    public function setPreco($p){
        $this->preco = $p; //altera o preco
    }

    public function mostrarProduto(){
        echo "Dados do Produto: \n"; //mostra o titulo
        echo "Nome: {$this->nome}\n"; //mostra o nome
        echo "Preco: {$this->preco}\n"; //mostra o preco
    }

}

//criando os objetos:
$p1 = new Produto("Teclado", 100.00); //cria o primeiro produto
$p2 = new Produto("Mouse", 50.00); //cria o segundo produto

//mostrando os dados dos produtos:
$p1->mostrarProduto(); //mostra os dados do teclado
echo "\n"; //pular
$p2->mostrarProduto(); //mostra os dados do mouse

?>
