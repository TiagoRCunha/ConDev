<?php

/**
 * Rotas
 */

use Model\UserDeveloperController;
use Pecee\Http\Request;
use Pecee\Http\Response;
use Pecee\SimpleRouter\SimpleRouter as Router;

require 'simple_router_helper.php';
Router::setDefaultNamespace('\Controller');

// Router::get('/userDeveloper/{id}/{name}', function ($id, $name) {

//   return 'foi';
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
Router::get('/userDeveloper/{password}', function ($password) {
  $client = new MongoDB\Client(DSN);

  $query = ["password" => $password];

  // $jsonify = json_encode($name);

  $mycursor = $client->CONDEV->UserDeveloper->find($query);

  foreach ($mycursor as $corno) {
    return $corno["name"];
  }
  return "nenhum corno com o nome " . $password . " encontrado";
});

Router::post('/userDeveloper/', function () {
  // $con = new \Persistence\Connection;

  $client = new MongoDB\Client(DSN);

  $client->CONDEV->UserDeveloper->insertOne();
})->name('teste');

Router::get('/', 'UserDeveloperController@getHello')->name('teste');

Router::get('/user/s/{id}', 'UserStartup@getUser')->name('getUser');

// Router::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//   // ...
// });


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

//   $id = $args['_id'];

//   $arr =  array_filter($user1, function ($j) use ($id) {
//     if ($j['_id'] ==  $id) {
//       return $j;
//     }
//   }, ARRAY_FILTER_USE_BOTH);

//   $response->getBody()->write(json_encode($user1));

//   return $response->withHeader('Content-Type', 'application/json');
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
