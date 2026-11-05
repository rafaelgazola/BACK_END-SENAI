<?php 
require_once 'Cliente.php';

class ClientePF extends Cliente{
    private string $cpf;

    # [Override]
    public function __construct(string $nome, string $telefone, string $email, string $cpf )
    {
        parent::__construct($nome, $telefone, $email);
        $this->cpf = $cpf;

    }

    # [Override]
    public function getDados()
    {
        parent::getDados();
        return "Nome: {$this->nome}\n
        Telefone: {$this->telefone}\n
        Email: {$this->email}\n
        CPF: {$this->cpf}\n";
    }
}

$cpf = new ClientePF("jorge", "12341231212", "jorge@jorge", "123423123123");
echo $cpf->getDados();
?>