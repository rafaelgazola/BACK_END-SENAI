<?php 
//Criando a classe TV
//Importa controleInterface

require_once 'controleInterface.php';
class TV implements ControleInterface{
    private bool $status;
    private int $volume;
    private int $canal;

    //metodos
    public function __construct()
    {
        $this->status = false;
        $this->volume = 35;
        $this->canal = 22;
    }
    
?>