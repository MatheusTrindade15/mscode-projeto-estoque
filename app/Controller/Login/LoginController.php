<?php

namespace App\Controller\Login;

use App\Controller\AbstractController;

class LoginController extends AbstractController
{
    public function index(array $data): void
    {
        $_SESSION['usuarioLogado'] = false;
        $this->render('login/login.php');
    }
}
