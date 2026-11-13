<?php 
//importando a classe controle
require_once __DIR__ . '/Controle.php';
$c = new Controle();
echo $c->ligar();
echo $c->ligar();
echo $c->mostrarStatus();
echo $c->getStatus();
$c->setVolume(1);
echo $c->aumentarVol();
echo $c->diminuirVol();
echo $c->aumentarCanal();
echo $c->diminuirCanal();
?>
