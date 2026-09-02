<?php
require_once 'conect.php';

$sql = "INSERT INTO alunos (nome, turma, nascimento, ativo, email) VALUES (:nome, :turma, :nascimento , :ativo, :email)";
try {
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":nome", "GAZOLA");
    $stmt->bindValue(":turma", "I1D46A");
    $stmt->bindValue("nascimento", "2010-06-20");
    $stmt->bindValue(":ativo", "true");
    $stmt->bindValue(":email", "rafaelgazola@gmail.com");

    $stmt->execute();
    echo "Aluno Inserido com Sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}