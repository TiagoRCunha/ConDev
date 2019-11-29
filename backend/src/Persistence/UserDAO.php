<?php

namespace Persistence;

use Model\UserStartup;

class UserDAO
{

  public static function getUserById(string $id)
  {
    $new_id = new \MongoDB\BSON\ObjectId($id);
    $query = new \MongoDB\Driver\Query(['_id' => $new_id]);
    // herdando um instancia do mongo
    $cursor = Connection::getConnection()->executeQuery(DB_NAME . '.UserStartup', $query);

    $arr_users = [];

    foreach ($cursor as $document) {

      $arr_users[] = var_dump($document);
    };

    // return var_dump($query);
    return json_encode($arr_users);
  }

  public static function insertUser($user)
  {
    $bulk = new \MongoDB\Driver\BulkWrite();
    $bulk->insert($user);
    $cursor = Connection::getConnection();

    $result = $cursor->executeBulkWrite(DB_NAME . '.UserStartup', $bulk);
  }
}
