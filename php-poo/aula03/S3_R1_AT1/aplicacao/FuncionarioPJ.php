<?php
require_once 'Funcionario.php';
class FuncionarioPJ extends Funcionario
{
    private string $cnpj;

    public function __construct(
        string $nome,
        string $telefone,
        string $endereco,
        string $cnpj,
        float $salario
    ) {
        parent::__construct($nome, $telefone, $endereco, $salario);
        $this->cnpj = $cnpj;
    }

    public function getDados(): string
    {
        return parent::getDados() . "\nCNPJ: {$this->cnpj}";
    }

    public function calcularPagamento(): float
    {
        // O enunciado não define descontos ou adicionais.
        return $this->salario;
    }
}