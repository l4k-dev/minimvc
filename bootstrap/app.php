<?php

define('BASE_PATH', dirname(__DIR__));

use App\Core\App;
use App\Core\Router;
use Dotenv\Dotenv;

// Verifica se o ambiente está configurado
if (!file_exists(BASE_PATH . '/.env')) {
    http_response_code(500);

    echo '<h1>Erro de configuração</h1>';
    echo '<p>O arquivo <strong>.env</strong> não foi encontrado.</p>';
    echo '<p>Crie um arquivo <strong>.env</strong> baseado no <strong>.env.example</strong>.</p>';

    exit;
}

// Carrega as variáveis do .env
$dotenv = Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

// Cria o Router
$router = new Router();

// Registra as rotas
require BASE_PATH . '/routes/web.php';

// Cria e retorna a aplicação
return new App($router);