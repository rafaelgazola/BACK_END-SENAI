<?php 
require_once 'Cliente.php';
class ClientePF extends Cliente{
    private string $cpf;

    
    public function __construct(string $n, string $e, string $c){
        parent::__construct($n, $e);
        $this->cpf = $c;
    }

    public function getDados(){
        return "Nomes: {$this->nome}\n Email: {$this->email}\nCPF: {$this->cpf}";
    }
}
$cpf = new ClientePF("jorge","jorge@gorge", "123123123-123-2");
echo $cpf->getDados();
?>