<?php 
require_once 'conect.php';

$n_nome = 'grogorio';
$id = 5;


$sql = "UPDATE alunos SET nome = :nome WHERE id = :id";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":nome",$n_nome);
$stmt->bindParam(":id", $id);
$stmt->execute();
?>