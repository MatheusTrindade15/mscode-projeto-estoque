<?php

namespace App\Controller\Login;

use App\Controller\AbstractController;
use App\Model\Usuario;

class CadastrarUsuarioController extends AbstractController
{
    public function index(array $requestData): void
    {
        $usuarioConexao = new Usuario();
        
        if ($this->emailExiste($usuarioConexao, $requestData['email'])) {
            $this->render('login/cadastro.php', ['error' => true]);
            return;
        }

        $senhaHash = $this->hashSenha($requestData['password']);
        $this->cadastrarUsuario($usuarioConexao, $requestData['nome'], $requestData['email'], $senhaHash);
        
        $this->render('login/cadastro.php', ['error' => false]);
    }

    private function emailExiste(Usuario $usuarioConexao, string $email): bool
    {
        $usuario = $usuarioConexao->buscarPorEmail($email);
        return !empty($usuario) && isset($usuario[0]['email']);
    }

    private function hashSenha(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    private function cadastrarUsuario(Usuario $usuarioConexao, string $nome, string $email, string $senhaHash): void
    {
        $usuarioConexao->cadastrar($nome, $email, $senhaHash);
    }
}
