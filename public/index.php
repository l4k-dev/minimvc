<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Controla exibição de erros conforme o ambiente (definido no .env)
$isProduction = ($_ENV['APP_ENV'] ?? 'production') === 'production';

ini_set('display_errors', $isProduction ? '0' : '1');
ini_set('display_startup_errors', $isProduction ? '0' : '1');
error_reporting(E_ALL);

// Headers de Segurança
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("X-Permitted-Cross-Domain-Policies: none");

// Content-Security-Policy inicial — ajuste os domínios conforme CDNs/fontes usados no site
header(
    "Content-Security-Policy: " .
    "default-src 'self'; " .
    "img-src 'self' data: https:; " .
    "script-src 'self' https://cdn.tailwindcss.com; " .
    "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; " .
    "font-src 'self' https://fonts.gstatic.com;" .
    "frame-src 'self' https://www.google.com;"
);
// Ative esta linha apenas quando o site já estiver rodando em HTTPS:
//header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");

$app->run();