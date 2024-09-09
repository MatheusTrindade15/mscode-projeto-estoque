<?php

namespace App\Controller\Categoria;


use App\Controller\AbstractController;

class CadastrarController extends AbstractController
{
  public function index(array $requestData): void
  {
    $this->renderComHeader('categoria/nova_categoria.php', [
      'headTitle' => '- Categorias',
      'produtosActive' => 'active'
    ]);
  }
}
