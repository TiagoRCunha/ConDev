<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserDeveloperController extends Controller
{

    private $user;
    private static $arr_users;

    // constructor receives container instance

    public function __construct()
    {
        $this->user = new \App\Model\UserDeveloper;

        self::$arr_users = [];
    }

    /**
     * Retorno o usuario indentificado pelo id
     *
     * @param string $id
     * @return void
     */

    public function getUser(Request $request)
    {
        return \App\Persistence\UserDeveloperDAO::getUserById($request->id);
    }

    public function setUser(Request $request, Response $response)
    {
        $user = new \App\Model\UserDeveloper($request);

        return json_encode(
          [ "success" => \App\Persistence\UserDeveloperDAO::insertUser($user) ]
        );

    }

    public function putUser(Request $request)
    {
        $user = new \App\Model\UserDeveloper($request);

        return json_encode(
          [ "success" => \App\Persistence\UserDeveloperDAO::updateUser($request->id, $user) ]
        );

    }

    public function deleteUser(Request $request)
    {
        $user = new \App\Model\UserDeveloper($request);

        return json_encode(
          [ "success" => \App\Persistence\UserDeveloperDAO::deleteUser($user) ]
        );

    }
}
