<?php
require_once 'conect.php';

$id = 5;

$sql = "SELECT nome, turma, nascimento, ativo FROM alunos WHERE id = :id";

try {
    $stmt = $conexao->prepare($sql);

    $stmt->bindValue(":id", $id, PDO::PARAM_INT);
    $stmt->execute();

    $aluno = $stmt->fetch(PDO::FETCH_ASSOC);

  
    if ($aluno) {
       
        $ativoStatus = $aluno['ativo'] ? 'Sim' : 'Não';

        echo "Aluno: {$aluno['nome']} <br>";
        echo "Turma: {$aluno['turma']} <br>";
        echo "Nasc: {$aluno['nascimento']} <br>";
        echo "Ativo: {$ativoStatus}";
    } else {
        echo "Nenhum aluno encontrado com o ID {$id}.";
    }
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
}
