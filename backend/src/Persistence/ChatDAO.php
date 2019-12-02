<?php

/**
 * 
 * Class:  ChatDao 
 */

namespace Persistence;

use \Persistence\IDao as IDao;

// TODO
class ChatDao
{

  static function getChat(string $user_id, string $chat_id)
  {

    $new_user_id = new \MongoDB\BSON\ObjectId($user_id);
    $new_chat_id = new \MongoDB\BSON\ObjectId($chat_id);
    $query = new \MongoDB\Driver\Query(['_id' => $new_chat_id, 'users._id' => $new_user_id]);
    $cursor = Connection::getConnection()->executeQuery(DB_NAME . '.Chat', $query);

    $arr_chat = [];

    foreach ($cursor as $document) {

      $arr_chat[] = $document;
    };

    return json_encode($arr_chat);
  }

  function getAll()
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
