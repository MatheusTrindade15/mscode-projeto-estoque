<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Model\Produto;

class EditarProdutoController extends AbstractController
{
    public function index(array $requestData): void
    {
        $produtoId = $requestData['id'];
        $produtoModel = new Produto();
        
        $produto = $this->buscarProduto($produtoModel, $produtoId);
        
        if ($produto === null) {
            $this->redirecionarParaEstoque();
            return;
        }
        
        $this->renderPaginaEdicao($produto);
    }

    private function buscarProduto(Produto $produtoModel, int $id): ?array
    {
        $produto = $produtoModel->buscar($id);
        return !empty($produto) ? $produto : null;
    }

    private function redirecionarParaEstoque(): void
    {
        $this->redirect('/app/estoque');
    }

    private function renderPaginaEdicao(array $produto): void
    {
        $this->renderComHeader('estoque/add.php', [
            'produto' => $produto,
            'headTitle' => '- Produtos',
            'produtosActive' => 'active'
        ]);
    }
}
