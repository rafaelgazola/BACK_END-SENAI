<?php
declare(strict_types=1);

namespace App\Controllers;

// Controller acessado pelas rotas tecnico/index e tecnico/perfil/{id}.
class TecnicoController{
    // Exibe a mensagem inicial da rota de técnicos.
    public function index(): void{
        echo "<h2>LogiTech Sistemas - Listagem de Tecnicos</h2>";
        echo "<p>Rota padrão adicionada com sucesso!</p>";
    }

    // Exibe o código recebido pela URL; usa 0 quando não for informado.
    public function perfil(string $id = '0'): void{
        echo "<h1>Exibindo Técnico: #{$id}</h1>";
    }
}
?>
