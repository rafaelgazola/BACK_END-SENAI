<?php 
// Importando a classe Cliente
require_once 'Cliente.php';

// Criando a classe ClientePJ
class ClientePJ extends Cliente{
    // Atributos
    private string $cnpj;

    # [Override]
    public function __construct(string $n, string $t, string $e, string $c){
        parent::__construct($n, $t, $e);
        $this->cnpj = $c;
    }

    # [Overide]
    public function getDados(){
        return "Nomes: {$this->nome}\n Email: {$this->email}\nCNPJ: {$this->cnpj}";
    }
}
$cnpj = new ClientePJ("jorge","199999999", "jorge@gorge", "123123123-123-2");
echo $cnpj->getDados();
?>