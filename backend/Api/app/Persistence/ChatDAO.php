<?php

/**
 * 
 * Class:  ChatDao 
 */

namespace App\Persistence;


class ChatDao
{

  static function getChat(string $user_id, string $chat_id)
  {

    $new_user_id = new \MongoDB\BSON\ObjectId($user_id);
    $new_chat_id = new \MongoDB\BSON\ObjectId($chat_id);
    $query = new \MongoDB\Driver\Query(['_id' => $new_chat_id, 'users._id' => $new_user_id]);
    $cursor = Connection::getConnection()
      ->executeQuery(
        Connection::getConf()
          ->database
          ->name . '.Chat',
        $query
      );

    $arr_chat = [];

    foreach ($cursor as $document) {

      $arr_chat[] = $document;
    };

    return json_encode($arr_chat);
  }

  public static function insertChat($chat)
  {
    $bulk = new \MongoDB\Driver\BulkWrite();
    $bulk->insert($chat);
    $cursor = Connection::getConnection();

    $result = $cursor
      ->executeBulkWrite(
        Connection::getConf()
          ->database
          ->name . '.Chat',
        $bulk
      );

    return json_encode($result);
  }

  static function getAllChat(string $user_id)
  {

    $new_user_id = new \MongoDB\BSON\ObjectId($user_id);
    $query = new \MongoDB\Driver\Query(['users._id' => $new_user_id]);
    $cursor = Connection::getConnection()
      ->executeQuery(
        Connection::getConf()
          ->database
          ->name . '.Chat',
        $query
      );

    $arr_chat = [];

    foreach ($cursor as $document) {

      $arr_chat[] = $document;
    };

    return json_encode($arr_chat);
  }

  function delete(Object $data): bool
  {
    return false;
  }
}
