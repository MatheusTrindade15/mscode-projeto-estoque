<?php

namespace App\Controller\Categoria;

use App\Controller\AbstractController;
use App\Model\Categoria;

class SalvarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $model = new Categoria();
        if (isset($requestData['id'])) {
            $model->editar($requestData['id'], $requestData['nome']);
        } else {
            $model->cadastrar($requestData['nome']);
        }

        $this->redirect('/app/categoria');
    }
}