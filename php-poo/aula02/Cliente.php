<?php 
//Cria a CLasse cliente:
class Cliente{
    //atributos:
    private $nome;
    private $email;
    private $cpf;

    //metodos:
    public function __construct($n, $c)
    {
        $this->nome = $n;
        $this->cpf = $c;
    }

    //metodos acessores (getter e setter) para nome:
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }

    //metodos acessores (getter e setter) para email:
    public function geteEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $this->email = $e;
    }

    //metodos acessores (getter e setter) para cpf:
    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($c){
        $this->cpf= $c;
    }


    public function mostrarCliente(){
        echo "Dados do cliente: \n";
        echo "Nome: {$this->nome}\n";
        echo "Email: {$this->email}\n";
        echo "CPF: {$this->cpf}\n";
    }
}

$c1 = new Cliente("gazola", "123.123.123-22");
//$c1->setNome("gazola");
$c1->setEmail("gazola@gmail.com");
//$c1->setCpf("123.123.123-22");
$c1->mostrarCliente();

?>