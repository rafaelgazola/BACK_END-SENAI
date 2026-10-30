<?php 
require_once 'Cliente.php';
class ClientePJ extends Cliente{
    private string $cnpj;

    
    public function __construct(string $n, string $e, string $c){
        parent::__construct($n, $e);
        $this->cnpj = $c;
    }

    public function getDados(){
        return "Nomes: {$this->nome}\n Email: {$this->email}\nCNPJ: {$this->cnpj}";
    }
}
$cnpj = new ClientePJ("gazola","gazola@gmail.com", "123.123.123-22");
echo $cnpj->getDados();
?>