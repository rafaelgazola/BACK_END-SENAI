<?php
class cliente {
    //atributos:

    public  string $nome;
    public int $idade;
    public float $peso;
    
    public function __construct(string $nome, int $idade, float $peso){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
    }

    public function mostrarDados(){
        echo $this->nome . "\n";
        echo $this->idade . "\n";
        echo $this->peso . "\n";
    }

}

?>
