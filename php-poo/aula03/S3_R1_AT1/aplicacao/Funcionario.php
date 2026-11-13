<?php

abstract class Funcionario
{
    protected string $nome;
    protected string $telefone;
    protected string $cargo;
    protected string $endereco;
    protected float $salario;
    protected string $nasc;
    protected float $admissao;

    public function __construct(
        string $nome,
        string $telefone,
        string $cargo,
        string $endereco,
        float $salario,
        string $nasc,
        float $admissao
    ) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->salario = $cargo;
        $this->endereco = $endereco;
        $this->salario = $salario;
        $this->salario = $nasc;
        $this->salario = $admissao;
       
    }

    protected function getDados() {
        $s = number_format($this->salario, 2, ',', '.');
        return "
        [Funcionario] {$this->nome}
        Cargo: {$this->cargo}
        Salário:{$s}
        Nascimento: {$this->nasc}
        Telefone: {$this->telefone}
        Admissão: {$this->admissao}";
    }

    // Cada classe filha deve implementar este método.
    abstract public function calcularPagamento(): float;
}