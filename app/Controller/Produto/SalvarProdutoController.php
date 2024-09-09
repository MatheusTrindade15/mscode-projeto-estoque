<?php

namespace App\Controller\Produto;

use App\Controller\AbstractController;
use App\Model\Produto;

class SalvarProdutoController extends AbstractController
{
    public function index(array $requestData): void
    {
        $produtoModel = new Produto();

        if ($this->produtoExiste($requestData)) {
            $this->atualizarProduto($produtoModel, $requestData);
        } else {
            $this->cadastrarProduto($produtoModel, $requestData);
        }

        $this->redirecionarParaEstoque();
    }

    private function produtoExiste(array $requestData): bool
    {
        return isset($requestData['id']);
    }

    private function atualizarProduto(Produto $produtoModel, array $requestData): void
    {
        $produtoModel->editar(
            $requestData['id'],
            $requestData['nome'],
            $requestData['descricao'],
            $requestData['categoriaId'],
            $requestData['valor']
        );
    }

    private function cadastrarProduto(Produto $produtoModel, array $requestData): void
    {
        $produtoModel->cadastrar(
            $requestData['nome'],
            $requestData['descricao'],
            $requestData['categoriaId'],
            $requestData['quantidade'],
            $requestData['valor']
        );
    }

    private function redirecionarParaEstoque(): void
    {
        $this->redirect('/app/estoque');
    }
}
