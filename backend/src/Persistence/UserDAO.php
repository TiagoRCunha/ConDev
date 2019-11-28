<?php

namespace Persistence;

class UserDAO
{

  public static function getUserById(string $id)
  {
    $new_id = new \MongoDB\BSON\ObjectId($id);
    $query = new \MongoDB\Driver\Query(['_id' => $new_id]);
    // herdando um instancia do mongo
    $cursor = Connection::getConnection()->executeQuery('CONDEV.UserStartup', $query);

    // die(var_dump($cursor));
    // $arr_user = [
    //   ['id' => $id, 'name' => 'teste nome']
    // ];

    $arr_users = [];

    foreach ($cursor as $document) {

      $arr_users[] = var_dump($document);
    };

    // return var_dump($query);
    return json_encode($arr_users);
  }
}
