<?php

/**
 * 
 * Class:  UserStartupDAO 
 */

namespace App\Persistence;

class UserStartupDAO
{

  public static function getUserById(string $id)
  {
    $new_id = new \MongoDB\BSON\ObjectId($id);
    $query = new \MongoDB\Driver\Query(['_id' => $new_id]);
    // herdando um instancia do mongo
    $cursor = Connection::getConnection()->executeQuery(DB_NAME . '.UserStartup', $query);

    $arr_users = [];

    foreach ($cursor as $document) {

      $arr_users[] = $document;
    };

    return json_encode($arr_users);
  }

  public static function insertUser($user)
  {
    $bulk = new \MongoDB\Driver\BulkWrite();
    $bulk->insert($user);
    $cursor = Connection::getConnection();

    $result = $cursor->executeBulkWrite(DB_NAME . '.UserStartup', $bulk);

    return json_encode($result);
  }
}