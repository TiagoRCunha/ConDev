<?php

require __DIR__ . '/../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use \Controller\UsersController as UsersController;

/**
 * Obtém lista de usuários
 * @param none
 * @return response json
 */

// $app->get('/api/v3/users', UsersController::class, ':getUsers');

$app->get('/', function (Request $request, Response $response) {
  $response->getBody()->write('Hello world');

  return $response
    ->withHeader('Content-Type', 'test')
    ->withStatus(201);
});
// Define app routes
//Retrieve
// $app->get('/api/v2/user/{id}', function (Request $request, Response $response, $args) {

  // $id = $args['_id'];

  // $arr =  array_filter($user1, function ($j) use ($id) {
  //   if ($j['_id'] ==  $id) {
  //     return $j;
  //   }
  // }, ARRAY_FILTER_USE_BOTH);

  // $response->getBody()->write(json_encode($user1));

  // return $response->withHeader('Content-Type', 'application/json');
// });

// Create or insert
// $app->post('/user/insert', function (Request $request, Response $response, $args) use ($users) {

//   $inserts = new MongoDB\Driver\BulkWrite();
//   $data = $users;
//   $payload = json_encode($data);

//   $response->getBody()->write($payload);

//   return $response
//     ->withHeader('Content-Type', 'application/json')
//     ->withStatus(201);
// });

// Update
// $app->put('/user/update', function (Request $request, Response $response, $args) {

//   $data = ["nome" => $request->getParsedBody()['nome'], "idade" => $request->getParsedBody()['idade']];

//   $payload = json_encode($data);

//   $response->getBody()->write($payload);

//   return $response
//     ->withHeader('Content-Type', 'application/json')
//     ->withStatus(201);
// });


// Delete
// $app->delete('/user/delete/{id}', function (Request $request, Response $response, $args) {

//   $data = ["id" => $args['id']];

//   $payload = json_encode($data);

//   $response->getBody()->write($payload);

//   return $response
//     ->withHeader('Content-Type', 'application/json')
//     ->withStatus(200);
// });
