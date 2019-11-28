<?php

/**
 *  Classe: UsersController
 */

namespace Controller;

class UsersController
{

  protected $container;
  private $user;
  private static $arr_users;

  // constructor receives container instance
  public function __construct()
  {
    $this->user = new \Model\UserDeveloper;

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
