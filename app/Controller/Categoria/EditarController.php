<?php

namespace App\Controller\Categoria;

use App\Controller\AbstractController;
use App\Model\Categoria;

class EditarController extends AbstractController
{
  public function index(array $requestData): void
  {
    $id = $requestData['id'];

    $model = new Categoria();
    $categoria = $model->buscar($id);

    $this->renderComHeader('categoria/nova_categoria.php', [
      'categoria' => $categoria,
      'produtosActive' => 'active'
    ]);
  }
}
