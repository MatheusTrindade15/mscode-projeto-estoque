<?php

namespace App\Controller\Error;

use App\Controller\AbstractController;

class NotFoundController extends AbstractController
{
    public function index(array $data): void
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . 'error/404.php';
    }
}
