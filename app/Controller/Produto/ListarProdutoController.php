<?php

namespace App\Controller\Produto;

use App\Model\Produto;
use App\Controller\AbstractController;

class ListarProdutoController extends AbstractController
{
  public function index(array $requestData): void
  {
    $model = new Produto();
    $produtos = $model->listar();

    $this->renderComHeader('estoque/produtos.php', [
      'produtos' => $produtos,
      'headTitle' => '- Produtos',
      'produtosActive' => 'active'
    ]);
  }
}
