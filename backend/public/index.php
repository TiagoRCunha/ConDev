<?php

ini_set('display_errors', 1);
error_reporting(E_ALL | E_WARNING);
/**
 * 
 *  Arquivo index
 */

require '../config/config.php';

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/routes.php';

// TODO forma slim de fazer, refatorar para simple-router
// $app->add(function ($request, $handler) {
//     $response = $handler->handle($request);
//     return $response
//         ->withHeader('Access-Control-Allow-Origin', '*')
//         ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
//         ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
// });
