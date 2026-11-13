<?php
//importando o ControleInterface
require_once __DIR__ . '/ControleRepository.php';
//Criando a classe Controle
class Controle extends ControleRepository
{
    //Atributos
    //métodos:
    public function __construct()
    {
        $this->status = false;
        $this->volume = 30;
        $this->canal = 500;
    }

    /**
     * Get the value of volume
     */ 
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     *
     * @return  self
     */ 
    public function setVolume(int $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get the value of canal
     */ 
    public function getCanal()
    {
        return $this->canal;
    }

    /**
     * Set the value of canal
     *
     * @return  self
     */ 
    public function setCanal(int $canal): self
    {
        $this->canal = $canal;

        return $this;
    }
}
