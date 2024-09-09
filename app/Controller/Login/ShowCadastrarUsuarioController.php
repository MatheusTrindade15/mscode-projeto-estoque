<?php

namespace App\Controller\Login;

use App\Controller\AbstractController;

class ShowCadastrarUsuarioController extends AbstractController
{
  public function index(array $requestData): void
  {
    $this->render('login/cadastro.php', ['requestData' => $requestData]);
  }
}
