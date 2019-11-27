<?php

namespace Persistence;

class UserDAO extends Connection
{

  private static $manager = $this->getConnection();

  public static function getUserById(string $id)
  {
    // herdando um instancia do mongo
    self::$manager->$arr_user = [
      ['id' => $id, 'name' => 'teste nome']
    ];

    return json_encode($arr_user);
  }
}
