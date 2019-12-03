<?php

namespace Controller;

class UserDeveloperController
{

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

    return \Persistence\UserDeveloperDAO::getUserById($id);
  }

  public function setUser()
  {
    $values = input()->all([
      "name",
      "email",
      "password",
      "tag",
      "following",
      "active",
      "thumbnail",
      "ocupation",
      "birthDate",
      "description",
      "locale"
    ]);

    return \Persistence\UserDeveloperDAO::insertUser($values);
  }
}
