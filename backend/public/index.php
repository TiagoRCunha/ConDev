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

$users = [
         ["id"=>1, "nome"=>"Wanderlei Silva do Carmo"],
         ["id"=>2, "nome"=>"Lula Molusco"],
         ["id"=>3, "nome"=>"Rodrigo Santoro"],
         ["id"=>4, "nome"=>"José do Carmo"],
         ["id"=>5, "nome"=>"Mané da Silva"]
];

// Define app routes
//Retrieve
$app->get('/api/v2/user/{id}', function (Request $request, Response $response, $args) use ($users) {
   
   $id = $args['id'];

    $arr =  array_filter($users, function($j) use ($id) {
        if ($j['id'] ==  $id){
            return $j;
        }
       }, ARRAY_FILTER_USE_BOTH);

    $response->getBody()->write( json_encode($arr));

    return $response->withHeader('Content-Type', 'application/json');
});

//Create or insert
$app->post('/user/insert', function( Request $request, Response $response, $args ){

$data = [ "nome" => $request->getParsedBody()['nome'], "idade" => $request->getParsedBody()['idade'] ];    

// $user = new \Model\User();

// $user->setNome($data['nome']);
// $user->setLogin($data['login']);
//\Persistence\UserDao::insert($user);

$payload = json_encode($data);

$response->getBody()->write($payload);

return $response
          ->withHeader('Content-Type', 'application/json')
          ->withStatus(201);

});

//Update
$app->put('/user/update', function( Request $request, Response $response, $args ){

    $data = [ "nome" => $request->getParsedBody()['nome'], "idade" => $request->getParsedBody()['idade'] ];    
    
    $payload = json_encode($data);
    
    $response->getBody()->write($payload);
    
    return $response
              ->withHeader('Content-Type', 'application/json')
              ->withStatus(201);
    
    });


    //Delete
$app->delete('/user/delete/{id}', function( Request $request, Response $response, $args ){

    $data = [ "id" => $args['id'] ];    
    
    $payload = json_encode($data);
    
    $response->getBody()->write($payload);
    
    return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
    
    });
    
            
// Run app
$app->run();

    
    //use \Controller\UsersController;
    
    
    //if ( $conn = \Persistence\Connection::getConnection() ):
        //          echo "Sucesso";
        //endif;
        
