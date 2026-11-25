<?php
class UsuarioModel{
    public function listarTodos(){
        return[
            ['id' => 1, 'nome' => 'rafael', 'email' => 'rafaelgcosta@gmail.com'],
            ['id' => 2, 'nome' => 'tenorio', 'email' => 'tenorio@gmail.com'],
            ['id' => 3, 'nome' => 'Jorge Carneiro', 'email' => 'jcarneiro@gmail.com'],
        ];
    }
}
?>