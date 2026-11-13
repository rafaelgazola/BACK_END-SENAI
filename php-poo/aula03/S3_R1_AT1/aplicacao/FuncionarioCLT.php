<?php 
require_once 'Funcionario.php';
class FuncionarioCLT extends Funcionario {
    private string $cpf;
    private float $descontos;


    # [Override]
    public function __construct(string $nome, string $telefone, string $cargo, string $endereco, float $salario, string $nasc, float $admissao)
    {
        return parent::__construct($nome, $telefone, $cargo, $endereco, $salario, $nasc, $admissao);
        $this->cpf = $cpf;
        $this->descontos = $descontos;
    }
    #[Override]
    public function getDados()
    {
        return parent::getDados(); //vai la no metodo pai e retorna pra ca
        return $this->salario - $this->descontos;
    }

    #[Override]
    public function calcularPagamento(): float
    {
        return $this->salario - $this->descontos;
    }
}
?>