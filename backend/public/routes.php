<?php

/**
 * Rotas
 */

use Pecee\SimpleRouter\SimpleRouter as Router;

require 'simple_router_helper.php';
Router::setDefaultNamespace('\Controller');


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

Router::get('/', 'ApiExampleController@getExample')->name("getExample");

Router::get('/user/d/{id}', 'UserDeveloperController@getUser')->name('getUser');

Router::post('/user/d/', 'UserDeveloperController@setUser')->name('setUser');

Router::get('/user/s/{id}', 'UserStartupController@getUser')->name('getUser');

Router::post('/user/s/', 'UserStartupController@setUser')->name('setUser');

Router::get('/user/{user_id}/c/', 'ChatController@getAllChat')->name('getAllChat');

Router::get('/user/{user_id}/c/{chat_id}', 'ChatController@getChat')->name('getChat');

Router::post('/user/{user_id}/c/', 'ChatController@setChat')->name('setChat');

Router::get('/user/{user_id}/m/{message_id}', 'MessageController@getMessage')->name('getMessage');



// Start the routing
Router::start();
