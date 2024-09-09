<?php

use App\Controller\Login\AutenticarController;
use App\Controller\Error\NotFoundController;
use App\Controller\Login\LoginController;
use App\Controller\AppController;
use App\Controller\Categoria\CadastrarController;
use App\Controller\Categoria\EditarController;
use App\Controller\Categoria\ListarController;
use App\Controller\Categoria\RemoverController;
use App\Controller\Categoria\SalvarController;
use App\Controller\Login\CadastrarUsuarioController;
use App\Controller\Login\ShowCadastrarUsuarioController;
use App\Controller\Produto\AdicionarProdutoController;
use App\Controller\Produto\CadastrarProdutoController;
use App\Controller\Produto\EditarProdutoController;
use App\Controller\Produto\ListarProdutoController;
use App\Controller\Produto\RemoverProdutoController;
use App\Controller\Produto\SalvarProdutoController;
use App\Controller\Produto\VenderProdutoController;
use App\Controller\Vendas\VendasController;

$router = [
    'routes' => [
        '' => LoginController::class,
        '/' => LoginController::class,
        '/cadastrar' => ShowCadastrarUsuarioController::class,
        '/cadastrar/salvar' => CadastrarUsuarioController::class,
        '/login' => LoginController::class,
        '/login/autenticar' => AutenticarController::class,
        '/app' => AppController::class,
        '/app/estoque' => ListarProdutoController::class,
        '/app/estoque/novo' => CadastrarProdutoController::class,
        '/app/estoque/add' => AdicionarProdutoController::class,
        '/app/estoque/vender' => VenderProdutoController::class,
        '/app/estoque/editar' => EditarProdutoController::class,
        '/app/estoque/salvar' => SalvarProdutoController::class,
        '/app/estoque/excluir' => RemoverProdutoController::class,
        '/app/categoria' => ListarController::class,
        '/app/categoria/nova' => CadastrarController::class,
        '/app/categoria/salvar' => SalvarController::class,
        '/app/categoria/editar' => EditarController::class,
        '/app/categoria/excluir' => RemoverController::class,
        '/app/venda' => VendasController::class,
        '/app/venda/nova' => VendasController::class,
    ],
    'default' => NotFoundController::class
];
