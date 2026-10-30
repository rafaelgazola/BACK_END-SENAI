<?php 
require_once 'conect.php';
$sql = "DELETE FROM alunos WHERE id = :id";

$id = 2;
try{
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    echo "usuario $id removido com sucesso";

}catch (PDOException $e){
    echo "erro" . $e->getMessage();
}

?>