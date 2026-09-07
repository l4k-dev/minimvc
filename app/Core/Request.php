<?php

namespace App\Core;

class Request
{
    public function method(): string
    {
        return strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
    }

    public function uri(): string
    {
        return parse_url(
            $_SERVER['REQUEST_URI'] ?? '/',
            PHP_URL_PATH
        ) ?? '/';
    }

    public function input(string $key, mixed $default = null): mixed
    {
        $data = $this->all();

        return $data[$key] ?? $default;
    }

    public function query(string $key, mixed $default = null): mixed
    {
        return $_GET[$key] ?? $default;
    }

    public function all(): array
    {
        $data = $_POST;

        $contentType = $_SERVER['CONTENT_TYPE'] ?? '';

        if (
            str_contains(
                $contentType,
                'application/json'
            )
        ) {
            $json = file_get_contents('php://input');

            if ($json) {
                $jsonData = json_decode($json, true);

                if (is_array($jsonData)) {
                    $data = $jsonData;
                }
            }
        }

        return array_merge($_GET, $data);
    }
}