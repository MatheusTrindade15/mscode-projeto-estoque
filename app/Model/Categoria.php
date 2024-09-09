<?php

namespace App\Model;

use App\Database\Query;

class Categoria
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();
    }

    public function cadastrar(string $nome): void
    {
        $this->query->insert('categoria', ['nome' => $nome]);
    }

    public function remover(int $id): void
    {
        $this->query->delete('categoria', "id = {$id}");
    }

    public function listar(): array
    {
        return $this->query->select('categoria');
    }

    public function buscar(int $id): array
    {
        return $this->query->select('categoria', "id = {$id}")[0];
    }

    public function editar(int $id, string $nome): void
    {
        $this->query->update('categoria', ['nome' => $nome], "id = {$id}");
    }
}
