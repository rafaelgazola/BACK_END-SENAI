<?php
declare(strict_types=1);

namespace App\Controllers;

class ChamadoController{
    public function index(): void{
        echo "<h2>LogiTech Sistemas - Listagem de chamados</h2>";
        echo "<p>Rota padrão adicionada com sucesso!</p>";
    }

    public function criar(): void{
        echo "<h2>Fomulário para novo chamado</h2>";
    }

    public function exibir(string $id = '0'): void{
        echo "<h1>Exibindo chamado: #{$id}</h1>";
    }
}
?>