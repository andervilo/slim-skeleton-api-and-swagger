<?php

namespace Controllers;

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

class Index
{
    function __construct()
    { }

    public function home(Request $request, Response $response, array $args)
    {
        return $response->withJson('{api:index}', 200)->withHeader('Content-type', 'application/json');
    }
}
