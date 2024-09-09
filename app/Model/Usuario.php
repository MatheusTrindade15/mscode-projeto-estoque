<?php

namespace App\Model;

use App\Database\Query;

class Usuario
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();
    }

    public function buscarPorEmail(string $email): array
    {
        $usuario = $this->query->select(
            tabela: 'usuario',
            condicao: "email="."'".$email."'" 
        );

        return $usuario;
    }

    public function cadastrar(string $nome, string $email, string $senha): void
    {
        $this->query->insert(
            tabela: 'usuario',
            dados: [
                'nome' => $nome,
                'email' => $email,
                'senha' => $senha
            ]
        );
    }
}
