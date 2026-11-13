<?php 
//Criando a interface para o controle
interface ControleInterface{
    public function ligar();
    public function aumentarVol();
    public function diminuirVol();
    public function aumentarCanal();
    public function diminuirCanal();
    public function mutar();
    public function mostrarStatus();
    public function getStatus();
}
?>
