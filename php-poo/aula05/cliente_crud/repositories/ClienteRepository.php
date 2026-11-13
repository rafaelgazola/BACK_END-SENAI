<?php 

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Cliente.php';
require_once __DIR__ . '/../interface/RepositoryInterface.php';


class ClienteRepository implements RepositoryInterface{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::conectar();    
    }

    #[Override]
    public function criar($objeto)
    {
        $sql = "INSERT INTO cliente (nome, email, documento) VALUES (:n, :e, :d)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':n' => $objeto->getNome(),
            ':e' => $objeto->getEmail(),
            ':d' => $objeto->getDocumento()
        ]);
    }

    #[Override]
    public function listar()
    {
        $sql = "SELECT * FROM cliente ORDER BY id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    #[Override]
    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM clientes WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    #[Override]
    public function atualizar($id, $objeto)
    {
        $sql = "UPDATE cliente SET nome=:n, email=:e, documento=:d WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':n' => $objeto->getNome(),
            ':e' => $objeto->getEmail(),
            ':d' => $objeto->getDocumento(),
            ':id' => $id
        ]);
    }

    #[Override]
    public function excluir($id)
    {
        $sql "DELETE FROM clientes WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
    }
}


?>