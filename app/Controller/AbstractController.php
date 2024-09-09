<?php

namespace App\Controller;

abstract class AbstractController
{
    public function __construct()
    {
        session_start();
        if ($_SESSION['usuarioLogado'] === false && $_SERVER['REQUEST_URI'] !== '/login' && $_SERVER['REQUEST_URI'] !== '/login/autenticar' && $_SERVER['REQUEST_URI'] !== '/cadastrar' && $_SERVER['REQUEST_URI'] !== '/cadastrar/salvar')
        {
            $this->redirect('/login');
        }
    }

    public function render(string $viewName, array $data = []): void
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . $viewName;
    }

    public function renderComHeader(string $viewName, array $data = []): void
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . '/includes/' . 'header.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . $viewName;
        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . '/includes/' . 'footer.php';
    }

    public function showJson(array $data): never
    {
        header("Content-Type: application/json");
        echo json_encode($data);
        die();
    }

    public function redirect(string $route): never
    {
        header("Location: {$route}");
        die();
    }

    /** Deve fazer o include da view */
    abstract public function index(array $requestData): void;
}
