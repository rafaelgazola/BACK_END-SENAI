<?php 
abstract class Cliente{
    //atributos
    protected string $nome; 
    protected string $telefone; 
    protected string $email;
    
    //metodos
    protected function __construct(string $nome, string $telefone, string $email)
    {
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->email = $email;
    }
    protected function getDados(){

    }
}
?>