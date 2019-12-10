<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get/{id}', function ($id) {

    return 1;
    //return response()->json(["_token"=> csrf_token(), "message"=>"O id informado foi $id","status"=>200])->header('Content-Type', 'application/json');


});

Route::put('/put/{id}', function (Request $request, $id) {
    $res = sprintf("The server response is: %s ", $id);
    return $res;
});

Route::get('/', 'ApiExampleController@getExample')->name("getExample");

Route::get('/user/d/{id}', 'UserDeveloperController@getUser')->name('getUser');

Route::post('/user/d/', 'UserDeveloperController@setUser')->name('setUser');

Route::put('/user/d/{id}', 'UserDeveloperController@putUser')->name('putUser');

Route::delete('/user/d/{id}', 'UserDeveloperController@deleteUser')->name('deleteUser');

Route::get('/user/s/{id}', 'UserStartupController@getUser')->name('getUser');

Route::post('/user/s/', 'UserStartupController@setUser')->name('setUser');

Route::get('/user/{user_id}/c/', 'ChatController@getAllChat')->name('getAllChat');

Route::get('/user/{user_id}/c/{chat_id}', 'ChatController@getChat')->name('getChat');

Route::post('/user/{user_id}/c/', 'ChatController@setChat')->name('setChat');

Route::get('/user/{user_id}/m/{message_id}', 'MessageController@getMessage')->name('getMessage');
