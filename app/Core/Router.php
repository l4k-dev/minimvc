<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $uri, array $action): void
    {
        $this->addRoute('GET', $uri, $action);
    }

    public function post(string $uri, array $action): void
    {
        $this->addRoute('POST', $uri, $action);
    }

    public function put(string $uri, array $action): void
    {
        $this->addRoute('PUT', $uri, $action);
    }

    public function patch(string $uri, array $action): void
    {
        $this->addRoute('PATCH', $uri, $action);
    }

    public function delete(string $uri, array $action): void
    {
        $this->addRoute('DELETE', $uri, $action);
    }

    private function addRoute(
        string $method,
        string $uri,
        array $action
    ): void {
        $this->routes[$method][] = [
            'uri' => $uri,
            'action' => $action
        ];
    }

    public function dispatch(
        Request $request,
        Response $response
    ): void {
        $method = $request->method();
        $uri = $request->uri();

        foreach ($this->routes[$method] ?? [] as $route) {

            $params = $this->matchRoute(
                $route['uri'],
                $uri
            );

            if ($params === false) {
                continue;
            }

            [$controller, $function] = $route['action'];

            if (
                !class_exists($controller) ||
                !method_exists($controller, $function)
            ) {
                $response->status(500);

                $this->renderError('500.php');

                return;
            }

            $instance = new $controller();

            $instance->$function(
                $request,
                $response,
                ...array_values($params)
            );

            return;
        }

        $response->status(404);

        $this->renderError('404.php');
    }

    private function matchRoute(
        string $routeUri,
        string $requestUri
    ): array|false {
        $routeParts = explode('/', trim($routeUri, '/'));
        $requestParts = explode('/', trim($requestUri, '/'));

        if (count($routeParts) !== count($requestParts)) {
            return false;
        }

        $params = [];

        foreach ($routeParts as $index => $routePart) {

            if (
                str_starts_with($routePart, '{') &&
                str_ends_with($routePart, '}')
            ) {
                $paramName = trim(
                    $routePart,
                    '{}'
                );

                $params[$paramName] = $requestParts[$index];

                continue;
            }

            if ($routePart !== $requestParts[$index]) {
                return false;
            }
        }

        return $params;
    }

    private function renderError(string $viewFile): void
    {
        $viewPath = BASE_PATH .
            '/resources/views/errors/' .
            $viewFile;

        if (file_exists($viewPath)) {
            require $viewPath;
            return;
        }

        echo 'Erro ' . http_response_code();
    }
}