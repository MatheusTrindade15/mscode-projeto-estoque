<?php

require 'vendor/autoload.php';

use App\Database\Query;

$query = new Query();

$nome = 'Arthur';
$email = 'Arthur@gmail.com';
$senha = '0000';

$emailBanco = $query->select(
    tabela: 'usuario',
    condicao: "email=".$email,
    colunas: 'email'
);

if($emailBanco != null){
    echo "Email já cadastrado!";
    die;
}

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$data = [
    'nome' => $nome,
    'email' => $email,
    'senha' => $senha_hash
];
$query->insert('usuario', $data);

echo 'Usuário inserido com sucesso!';
