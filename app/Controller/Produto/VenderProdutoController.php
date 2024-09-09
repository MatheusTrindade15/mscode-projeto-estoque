<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Model\Produto;

class VenderProdutoController extends AbstractController
{
  public function index(array $data): void
  {
    $model = new Produto();
    $model->vender($data['id']);

    $this->redirect('/app/estoque');
  }
}
