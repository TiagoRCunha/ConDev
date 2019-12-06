<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDeveloperController {

    private $user;
    private static $arr_users;

    // constructor receives container instance

    public function __construct() {
        $this->user = new \App\Model\UserDeveloper;

        self::$arr_users = [];
    }

    /**
    * Retorno o usuario indentificado pelo id
    *
    * @param string $id
    * @return void
    */

    public function getUser( string $id ) {

        return \App\Persistence\UserDeveloperDAO::getUserById( $id );
    }

    public function setUser() {
        $values = input()->all( [
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
        ] );

        return \Persistence\UserDeveloperDAO::insertUser( $values );
    }

    public function putUser( Request $request ) {
        var_dump( $request );
        die();

        $request = input()->all();

        return \Persistence\UserDeveloperDAO::insertUser( $request );
    }
}