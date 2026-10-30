<?php
class Produto { // classe e o molde usado para criar os produtos
    public string $nome; // atributo que guarda o nome em texto
    public float $preco; // atributo que guarda o preco em numero

    public function __construct(string $nome, float $preco) { // construtor chamado quando usamos new produto
        $this->nome = $nome; //this acessa o nome do objeto atual e recebe o nome enviado
        $this->preco = $preco; // this acessa o preco do objeto atual e recebe o preco enviado
    }

    public function mostrarProduto() { // metodo que mostra os dados no terminal
        echo "nome: {$this->nome}\n"; // mostra o nome e pula uma linha
        echo "preco: {$this->preco}\n"; // mostra o preco e pula uma linha
    }
}

$produto1 = new Produto("teclado", 80.00); // cria o primeiro objeto e envia nome e preco
$produto1->mostrarProduto();               //chama o metodo do primeiro objeto
echo "\n"; //pula

$produto2 = new Produto("mouse", 45.50); //cria o segundo objeto e envia nome e preco
$produto2->mostrarProduto();             // chama o metodo do segundo objeto
