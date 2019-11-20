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

// Define app routes
//Retrieve
$app->get('/api/v2/user/{id}', function (Request $request, Response $response, $args) use ($user1) {

    $id = $args['_id'];

    $arr =  array_filter($user1, function ($j) use ($id) {
        if ($j['_id'] ==  $id) {
            return $j;
        }
    }, ARRAY_FILTER_USE_BOTH);

    $response->getBody()->write(json_encode($user1));

    return $response->withHeader('Content-Type', 'application/json');
});

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
