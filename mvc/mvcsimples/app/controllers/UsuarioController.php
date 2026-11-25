<?php
require_once __DIR__ . '/../models/UsuarioModel.php';

class UsuarioController{
    public function index(){
        $usuarioModel = NEW UsuarioModel();
        $usuarios = $usuarioModel->listarTodos();


        require_once __DIR__ . '/../views/usuario/index.php';
    }
}
?>