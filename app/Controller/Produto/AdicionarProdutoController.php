<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Model\Produto;

class AdicionarProdutoController extends AbstractController
{
  public function index(array $data): void
  {
    $model = new Produto();
    $model->add($data['id']);

    $this->redirect('/app/estoque');
  }
}
