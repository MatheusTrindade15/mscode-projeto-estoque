<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Model\Produto;

class RemoverProdutoController extends AbstractController
{
    public function index(array $requestData): void
    {
        $model = new Produto();
        
        $model->remover($requestData['id']);

        $this->redirect('/app/estoque');
    }
}