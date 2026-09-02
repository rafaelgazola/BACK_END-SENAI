<?php
require_once 'conect.php';

$n_nome = 'Rafael';
$id = 1;
try{
$sql = "UPDATE alunos SET nome = :nome WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":nome", $n_nome);
$stmt->bindParam(":id", $id);
$stmt->execute();
} catch (PDOException $e){
    echo "ERRO: " . $e->getMessage();
}

?>