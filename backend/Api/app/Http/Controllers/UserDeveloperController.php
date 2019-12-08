<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function getUser(string $id)
    {

        return \App\Persistence\UserDeveloperDAO::getUserById($id);
    }

    public function setUser(Request $request)
    {
        $values = $request->all([
            'name',
            'email',
            'password',
            'tag',
            'following',
            'active',
            'thumbnail',
            'ocupation',
            'birthDate',
            'description',
            'locale'
        ]);

        return \App\Persistence\UserDeveloperDAO::insertUser($values);
    }

    public function putUser(Request $request)
    {

        $request = $request->all();

        return \App\Persistence\UserDeveloperDAO::insertUser($request);
    }
}
