<?php

namespace App\Core;

class App
{
    public function __construct(
        private Router $router
    ) {
    }

    public function run(): void
    {
        try {
            $request = new Request();
            $response = new Response();

            $this->router->dispatch(
                $request,
                $response
            );

        } catch (\Throwable $e) {
            http_response_code(500);

            echo '<pre>';
            echo 'Erro: ' . $e->getMessage() . PHP_EOL;
            echo 'Arquivo: ' . $e->getFile() . PHP_EOL;
            echo 'Linha: ' . $e->getLine() . PHP_EOL;
            echo PHP_EOL;
            echo $e->getTraceAsString();
            echo '</pre>';
        }
    }
}