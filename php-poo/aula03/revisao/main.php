<?php 
require_once 'ClientePF.php';
require_once 'ClientePJ.php';

$c[0] = new ClientePF("Tenorio", "12345", "tenorio@hjk", "2342343234-23");
$c[1] = new ClientePF("Magal", "12345", "tenorio@hjk", "2342343234-23");
$c[2] = new ClientePF("Caralhudo", "12345", "tenorio@hjk", "2342343234-23");
$c[3] = new ClientePF("Ronaldinho", "12345", "tenorio@hjk", "2342343234-23");

foreach ($c as $cliente){
    echo $cliente->getDados();
}
?>