<?php

/**
 * 
 *  Arquivo index
 */

require '../config/config.php';
require  '../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use \Controller\UsersController as UsersController;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Instantiate App
 *
 * In order for the factory to work you need to ensure you have installed
 * a supported PSR-7 implementation of your choice e.g.: Slim PSR-7 and a supported
 * ServerRequest creator (included with Slim PSR-7)
 */
$app = AppFactory::create();

// Add Routing Middleware
$app->addRoutingMiddleware();

/*
 * Add Error Handling Middleware
 *
 * @param bool $displayErrorDetails -> Should be set to false in production
 * @param bool $logErrors -> Parameter is passed to the default ErrorHandler
 * @param bool $logErrorDetails -> Display error details in error log
 * which can be replaced by a callable of your choice.
 
 * Note: This middleware should be added last. It will not handle any exceptions/errors
 * for middleware added after it.
 */
$errorMiddleware = $app->addErrorMiddleware(true, true, true);

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});


$app->add(function ($request, $handler) {
    $response = $handler->handle($request);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

/**
 * Obtém lista de usuários
 * @param none
 * @return response json
 */

// $app->get('/api/v3/users', UsersController::class, ':getUsers' );
/**
 * Definindo hardcode de inserção de banco de dados
 */
$user1 =     [
    "name" => "Wanderlei Silva do Carmo",
    "email" => "wander@exemple.com",
    "tag" => ["php", "slim", "laravel"],
    "following" => [],
    "active" => true,
    "ocupation" => "",
    "birthDate" => "",
    "description" => "",
    "locale" => ""

];
$users = [
    [
        "name" => "Wanderlei Silva do Carmo",
        "email" => "wander@exemple.com",
        "tag" => ["php", "slim", "laravel"],
        "following" => [],
        "active" => true,
        "ocupation" => "",
        "birthDate" => "",
        "description" => "",
        "locale" => ""

    ],
    [
        "name" => "Lula Molusco",
        "email" => "lula@exemplo.com",
        "tag" => [],
        "following" => [],
        "active" => true,
        "ocupation" => "",
        "birthDate" => "",
        "description" => "",
        "locale" => ""

    ],
    [
        "name" => "Rodrigo Santoro",
        "email" => "rodrigo@exemplo.com",
        "tag" => [],
        "following" => [],
        "active" => true,
        "ocupation" => "",
        "birthDate" => "",
        "description" => "",
        "locale" => ""

    ],
    [
        "name" => "José do Carmo",
        "email" => "jose@exemplo.com",
        "tag" => [],
        "following" => [],
        "active" => true,
        "ocupation" => "",
        "birthDate" => "",
        "description" => "",
        "locale" => ""

    ],
    [
        "name" => "Mané da Silva",
        "email" => "mane@exemplo.com",
        "tag" => [],
        "following" => [],
        "active" => true,
        "ocupation" => "",
        "birthDate" => "",
        "description" => "",
        "locale" => ""

    ]
];
// Usando este método para escrever no banco de dados
$inserts = new MongoDB\Driver\BulkWrite(['ordered' => true]);
// Inserindo o $user1 no banco de dados
$inserts->insert($user1);
// $manager vai ser a variavel que vai conectar com o banco de dados e execultar métodos
$manager = new MongoDB\Driver\Manager("");
// execultando metodo de inserção no banco de dados
$manager->executeBulkWrite("CONDEV.user", $inserts);

// Define app routes
//Retrieve
// $app->get('/api/v2/user/{id}', function (Request $request, Response $response, $args) use ($users) {

//     $id = $args['id'];

//     $arr =  array_filter($users, function ($j) use ($id) {
//         if ($j['id'] ==  $id) {
//             return $j;
//         }
//     }, ARRAY_FILTER_USE_BOTH);

//     $response->getBody()->write(json_encode($arr));

//     return $response->withHeader('Content-Type', 'application/json');
// });

//Create or insert
// $app->post('/user/insert', function (Request $request, Response $response, $args) use ($users) {

//     $inserts = new MongoDB\Driver\BulkWrite();
//     $data = $users;
//     $payload = json_encode($data);

//     $response->getBody()->write($payload);

//     return $response
//         ->withHeader('Content-Type', 'application/json')
//         ->withStatus(201);
// });

//Update
// $app->put('/user/update', function (Request $request, Response $response, $args) {

//     $data = ["nome" => $request->getParsedBody()['nome'], "idade" => $request->getParsedBody()['idade']];

//     $payload = json_encode($data);

//     $response->getBody()->write($payload);

//     return $response
//         ->withHeader('Content-Type', 'application/json')
//         ->withStatus(201);
// });


//Delete
// $app->delete('/user/delete/{id}', function (Request $request, Response $response, $args) {

//     $data = ["id" => $args['id']];

//     $payload = json_encode($data);

//     $response->getBody()->write($payload);

//     return $response
//         ->withHeader('Content-Type', 'application/json')
//         ->withStatus(200);
// });


// Run app
$app->run();

    
    //use \Controller\UsersController;
    
    
    //if ( $conn = \Persistence\Connection::getConnection() ):
        //          echo "Sucesso";
        //endif;
