<?php

namespace Controller;

class UserStartupController
{

  private $user;
  private static $arr_users;

  // constructor receives container instance
  public function __construct()
  {
    $this->user = new \App\Model\UserStartup;

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

    return \App\Persistence\UserStartupDAO::getUserById($id);
  }

  public function setUser()
  {
    $values = input()->all();

    return \Persistence\UserStartupDAO::insertUser($values);
  }
}