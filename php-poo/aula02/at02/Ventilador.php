
<?php 
class Ventilador{
    //atributo
    private string $marca;      //marca do ventilador
    private bool $acao;         //estado: ligado ou desligado
    private int $velocidade;    //velocidade do ventilador

    //metodos:
    public function __construct($m, $a, $v)
    {
        $this->marca = $m;          //define a marca
        $this->acao = $a;           //define o estado
        $this->velocidade = $v;     //define a velocidade
    }

    //metodo acessores (getter e setter) para marca:
    public function getMarca(){
        return $this->marca;        //retorna a marca
    }

    public function setMarca($m){
        $this->marca = $m;          //altera a marca
    }

    //metodo acessores (getter e setter) para acao:
    public function getAcao(){
        return $this->acao;         //retorna o estado
    }

    public function setAcao($a){
        $this->acao = $a;           //altera o estado
    }

    //metodo acessores (getter e setter) para velocidade:
    public function getVelocidade(){
        return $this->velocidade;   //retorna a velocidade
    }

    public function setVelocidade($v){
        $this->velocidade = $v;     //altera a velocidade
    }

    public function onOff() //funcao de ligar ou desligar
    {
        if($this->acao == true){    //verifica se esta ligado
            $this->acao = false;    //desliga o ventilador
            echo "Ventilador esta desligado\n";
        } else {
            $this->acao = true;     //liga o ventilador
            echo "Ventilador esta ligado\n";
        }
    }

    public function mostrarVentilador(){
        echo "Dados do Ventilador: \n";      
        echo "Marca: {$this->marca}\n";     //mostra a marca
        echo "Acao: " . ($this->acao ? "ligado" : "desligado") . "\n"; //mostra o estado
        echo "Velocidade {$this->velocidade}\n"; //mostra a velocidade
    }
}

$v1 = new Ventilador("Ventisilva", false, 20); //cria o objeto
$v1->mostrarVentilador();                     //mostra os dados


// sem construct

// $v1 = new Ventilador();   //cria o objeto sem parametros
// $v1->setMarca("Ventisilva"); //define a marca
// $v1->setAcao(true);          //define o estado
// $v1->setVelocidade(20);      //define a velocidade
// $v1->mostrarVentilador();    //mostra os dados

?> 