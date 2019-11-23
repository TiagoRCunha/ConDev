<?php

/**
 * Rotas
 */

use Pecee\SimpleRouter\SimpleRouter as Router;

require 'simple_router_helper.php';
Router::setDefaultNamespace('\Controller');

Router::get('/', function () {
  return 'Hello world';
})->name('teste');
//Router::get('/', '\Controller\UserDeveloperController@getHello')->name('teste');

Router::get('/user/{id}', function ($userId) {
  // ... 
});

Router::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
  // ...
});


// Start the routing
Router::start();

/**
 * Obtém lista de usuários
 * @param none
 * @return response json
 */

// $app->get('/api/v3/users', UserDeveloperController::class, ':getUsers');

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
