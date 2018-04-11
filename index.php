<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/clima', function (Request $request, Response $response, array $args) {
    
    $data = array('nombre' => 'Alejandro', '# cuenta' => '412135233');

    return $response->withJson($data);
});
$app->run();