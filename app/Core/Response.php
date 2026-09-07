<?php

namespace App\Core;

class Response
{
    public function status(int $status): self
    {
        http_response_code($status);

        return $this;
    }

    public function json(array $data, int $status = 200): void
    {
        http_response_code($status);

        header('Content-Type: application/json; charset=utf-8');

        echo json_encode($data);

        exit;
    }

    public function text(string $content, int $status = 200): void
    {
        http_response_code($status);

        header('Content-Type: text/plain; charset=utf-8');

        echo $content;

        exit;
    }
}