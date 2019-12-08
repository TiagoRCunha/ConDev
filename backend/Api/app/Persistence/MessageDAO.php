<?php

/**
 * 
 * Class:  MessageDao 
 */

namespace App\Persistence;

class MessageDao
{

  static function getMessage(string $user_id, string $message_id)
  {

    $new_user_id = new \MongoDB\BSON\ObjectId($user_id);
    $new_message_id = new \MongoDB\BSON\ObjectId($message_id);
    $query = new \MongoDB\Driver\Query(['_id' => $new_message_id, 'user._id' => $new_user_id]);
    $cursor = Connection::getConnection()
      ->executeQuery(
        Connection::getConf()
          ->database
          ->name . '.Message',
        $query
      );

    $arr_chat = [];

    foreach ($cursor as $document) {

      $arr_chat[] = $document;
    };

    return json_encode($arr_chat);
  }

  function postMessage()
  { }
  function findById(int $id)
  { }

  function update(Object $data): bool
  {
    return false;
  }

  function delete(Object $data): bool
  {
    return false;
  }
}
