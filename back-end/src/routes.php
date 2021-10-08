<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


/**
 * User
 */
$app->group(
    '/user',
    function () use ($app): void {
        $app->get('[/{id}]', function (Request $request, Response $response, array $args) {
            $service = $this->get('UserService');
            $id = isset($args['id']) ? $args['id'] : null;
            return $service->get($id);
        });
        $app->post('', function (Request $request, Response $response, array $args) {
            $service = $this->get('UserService');
            $data = $request->getParsedBody();
            return $service->post($data);
        });
        $app->put('/{id}', function (Request $request, Response $response, array $args) {
            $service = $this->get('UserService');
            $data = $request->getParsedBody();
            return $service->put($args['id'], $data);
        });
        $app->delete('', function (Request $request, Response $response, array $args) {
            $service = $this->get('UserService');
            return $service->delete($args);
        });
        $app->post('/search', function (Request $request, Response $response, array $args) {
            $service = $this->get('UserService');
            $data = $request->getParsedBody();
            return $service->search($data);
        });
    }
);


/**
 * Contact
 */
$app->group(
    '/contact',
    function () use ($app): void {
        $app->get('[/{id}]', function (Request $request, Response $response, array $args) {
            $service = $this->get('ContactService');
            $id = isset($args['id']) ? $args['id'] : null;
            return $service->get($id);
        });
        $app->post('', function (Request $request, Response $response, array $args) {
            $service = $this->get('ContactService');
            $data = $request->getParsedBody();
            return $service->post($data);
        });
        $app->put('/{id}', function (Request $request, Response $response, array $args) {
            $service = $this->get('ContactService');
            $data = $request->getParsedBody();
            return $service->put($args['id'], $data);
        });
        $app->delete('', function (Request $request, Response $response, array $args) {
            $service = $this->get('ContactService');
            return $service->delete($args);
        });
        $app->post('/search', function (Request $request, Response $response, array $args) {
            $service = $this->get('ContactService');
            $data = $request->getParsedBody();
            return $service->search($data);
        });
    }
);


/**
 * Default
 */

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);

    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Expose-Headers', 'Content-Disposition')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS');
});
