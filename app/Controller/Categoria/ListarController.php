<?php

namespace App\Controller\Categoria;

use App\Controller\AbstractController;
use App\Model\Categoria;

class ListarController extends AbstractController
{
  public function index(array $requestData): void
  {
    $model = new Categoria();
    $categorias = $model->listar();

    $this->renderComHeader('categoria/categoria.php', [
      'categorias' => $categorias,
      'headTitle' => '- Categorias',
      'produtosActive' => 'active',
    ]);
  }
}
