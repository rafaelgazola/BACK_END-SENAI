<?php 
class Cliente{
    protected string $nome;
    protected string $email;

    public function __construct(string $n, string $e){
        $this->nome = $n;
        $this->email = $e;
    }
    public function getDados(){
        return "nome: {$this->nome}\nEmail: {$this->email}";
    }
}
?>