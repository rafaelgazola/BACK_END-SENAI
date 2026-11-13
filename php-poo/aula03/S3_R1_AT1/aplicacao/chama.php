<?php 
require_once 'FuncionarioCLT.php';

$clt = new FuncionarioCLT("1919191919", "jorge@jorge.com.net", "12/12/12", 1621.41, "instrutor III", "12312", 200);
echo $clt->getDados();
echo $clt->calcularPagamento();
?>