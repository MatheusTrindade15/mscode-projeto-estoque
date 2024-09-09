<?php

namespace App\Controller;

use App\Model\Usuario;

class AppController extends AbstractController
{
  public function index(array $data): void
  {

    $usuario = new Usuario();
    $nome = $usuario->buscarPorEmail($_SESSION['email'])[0]['nome'];

    $this->renderComHeader('app.php', [
      'nome' => $nome,
      'headTitle' => '- App',
      'inicioActive' => 'active'
    ]);
  }
}
