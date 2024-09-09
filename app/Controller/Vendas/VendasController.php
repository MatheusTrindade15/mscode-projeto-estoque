<?php

namespace App\Controller\Vendas;

use App\Controller\AbstractController;

class VendasController extends AbstractController
{
  public function index(array $data): void
  {
    if ($_SERVER['REQUEST_URI'] === "/app/venda") {
      $this->renderComHeader('vendas/vendas_realizadas.php', [
        'headTitle' => '- Vendas',
        'vendasActive' => 'active'
      ]);
      exit;
    }

    $this->renderComHeader('vendas/nova_venda.php', [
      'headTitle' => '- Vendas',
      'vendasActive' => 'active'
    ]);
  }
}
