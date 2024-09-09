<?php

namespace App\Controller\Login;

use App\Controller\AbstractController;
use App\Model\Usuario;

class AutenticarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $usuarioConexao = new Usuario();
        $usuario = $this->buscarUsuario($usuarioConexao, $requestData['email']);

        if (!$this->validarUsuario($usuario, $requestData['password'])) {
            $this->render('login/login.php', ['error' => 'Login inválido! Verifique seus dados e tente novamente.']);
            return;
        }

        $this->iniciarSessao($usuario[0]['id'], $requestData['email']);
        $this->redirect('/app');
    }

    private function buscarUsuario(Usuario $usuarioConexao, string $email): ?array
    {
        return $usuarioConexao->buscarPorEmail($email);
    }

    private function validarUsuario(?array $usuario, string $password): bool
    {
        if (null === $usuario) {
            return false;
        }

        return password_verify($password, $usuario[0]['senha']);
    }

    private function iniciarSessao(int $id, string $email): void
    {
        $_SESSION['usuarioLogado'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;
    }
}
