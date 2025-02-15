<?php

/**
 * 
 * Class:  UserDeveloperDAO 
 */

namespace App\Persistence;

class UserDeveloperDAO
{

  public static function getUserById(string $id)
  {
    $new_id = new \MongoDB\BSON\ObjectId($id);
    $query = new \MongoDB\Driver\Query(['_id' => $new_id]);
    // herdando um instancia do mongo
    $cursor = Connection::getConnection()
    ->executeQuery(
      Connection::getConf()
      ->database
      ->name . '.UserDeveloper',
      $query
    );
    
    $arr_users = [];
    
    foreach ($cursor as $document) {
      
      $arr_users[] = $document;
    };
    
    return $arr_users;
  }

  public static function insertUser($user)
  {
    $bulk = new \MongoDB\Driver\BulkWrite();
    $bulk->insert($user);
    $cursor = Connection::getConnection();

    $result = $cursor
      ->executeBulkWrite(
        Connection::getConf()
          ->database
          ->name . '.UserDeveloper',
        $bulk
    );


    return  $result->getInsertedCount() > 0;
  }

  public static function updateUser($id, $user)
  {
    $object_id = new \MongoDB\BSON\ObjectId($id);
  
    $bulk = new \MongoDB\Driver\BulkWrite();
    $bulk->update(
      ['_id' => $object_id],
      $user, [ 'upsert' => true]
    );
    $cursor = Connection::getConnection();

    $result = $cursor
      ->executeBulkWrite(
        Connection::getConf()
          ->database
          ->name . '.UserDeveloper',
        $bulk
    );


    return  $result->getModifiedCount() > 0;
  }

  public static function deleteUser($user)
  {
    $bulk = new \MongoDB\Driver\BulkWrite();
    $bulk->delete($user);
    $cursor = Connection::getConnection();

    $result = $cursor
      ->executeBulkWrite(
        Connection::getConf()
          ->database
          ->name . '.UserDeveloper',
        $bulk
    );


    return  $result->getDeletedCount() > 0;
  }
}
