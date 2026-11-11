<?php 
//criando o controleInterface

interface ControleInterface{
    public function ligar();
    public function aumentarVol();
    public function diminuirVol();
    public function subirCanal();
    public function descerCanal();
    public function mutar();

}


?>