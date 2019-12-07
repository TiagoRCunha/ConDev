<?php

/**
 *  Classe: UsersController
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
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

    return \Persistence\UserDAO::getUserById($id);
    //$response->getBody()->write(json_encode(self::$arr_users));

    // return $response->withHeader('Content-Type', 'application/json');

    // return 'recebido o id ' . $id;
  }

  public function setUser()
  {
    $values = input()->all([
      'name', 'cep', 'phone', 'email', 'description',
      'tags', 'active', 'locale', 'thumbnail', 'companySize', 'CNPJ'
    ]);

    return \Persistence\UserDAO::insertUser($values);
  }
}