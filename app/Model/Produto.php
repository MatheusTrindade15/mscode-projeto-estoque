<?php

namespace App\Model;

use App\Database\Query;

class Produto
{
  private Query $query;

  public function __construct()
  {
    $this->query = new Query();
  }

  public function cadastrar(
    string $nome,
    string $descricao,
    int $categoriaId,
    int $quantidadeInicial,
    int $valor
  ): void {
    $this->query->insert("produto", [
      "nome" => $nome,
      "descricao" => $descricao,
      "categoria_id" => $categoriaId,
      "quantidade_inicial" => $quantidadeInicial,
      "quantidade_disponivel" => $quantidadeInicial,
      "valor" => $valor
    ]);
  }

  public function remover(int $id): void
  {
    $this->query->delete('produto', "id = {$id}");
  }

  public function listar(): array
  {
    return $this->query->select('produto');
  }

  public function buscar(int $id): array
  {
    return $this->query->select('produto', "id = {$id}")[0];
  }

  public function editar(
    int $id,
    string $nome,
    string $descricao,
    int $categoriaId,
    int $valor
  ): void {
    $this->query->update(
      'produto',
      [
        'nome' => $nome,
        'descricao' => $descricao,
        'categoria_id' => $categoriaId,
        'valor' => $valor
      ],
      "id = {$id}"
    );
  }

  public function vender(int $id): void
  {
    $produto = $this->buscar($id);
    $this->query->update(
      'produto', 
      [
        "quantidade_disponivel" => $produto['quantidade_disponivel'] - 1
      ],
      "id=".$id
    );
  }

  public function add(int $id): void
  {
    $produto = $this->buscar($id);
    $this->query->update(
      'produto', 
      [
        "quantidade_disponivel" => $produto['quantidade_disponivel'] + 1
      ],
      "id=".$id
    );
  }
}
