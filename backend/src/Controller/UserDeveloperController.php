<?php

namespace Controller;

class UserDeveloperController
{

  public function getHello(Request $request, Response $response)
  {
    $response->getBody()->write('Hello world');

    return $response
      ->withHeader('Content-Type', 'test')
      ->withStatus(201);
  }
}
