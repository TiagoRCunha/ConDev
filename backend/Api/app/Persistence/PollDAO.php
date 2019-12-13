<?php

/**
 * 
 * Class:  PollDao 
 */

namespace App\Persistence;

class PollDAO
{

  public static function getPollById($id)
  {
    $object_id = new \MongoDB\BSON\ObjectId($id);
    $query = new \MongoDB\Driver\Query(['_id' => $object_id]);

    $cursor = Connection::getConnection()
        ->executeQuery(
          Connection::getConf()
            ->database
            ->name . '.Poll',
          $query
        );

    $arr_polls = [];

    foreach ($cursor as $document) {

      $arr_polls[] = $document;
    };

    return $arr_polls;
  }

  public static function getAll()
  {
    $query = new \MongoDB\Driver\Query([]);

    $cursor = Connection::getConnection()
        ->executeQuery(
            Connection::getConf()
                ->database
                ->name . '.Poll',
            $query
        );

    $arr_polls = [];

    foreach ($cursor as $document) {
      $arr_polls[] = $document;
    };

    return $arr_polls;
  }


  public static function insertPoll($poll)
  {
    $bulk = new \MongoDB\Driver\BulkWrite();
    $bulk->insert($poll);
    $cursor = Connection::getConnection();

    $result = Connection::getConnection()->executeBulkWrite(
        Connection::getConf()
          ->database
          ->name . '.Poll',
        $bulk
      );

    return $result->getInsertedCount() > 0;
  }


  public static function deletePoll($id)
  {
    $object_id = new \MongoDB\BSON\ObjectId($id);

    $bulk = new \MongoDB\Driver\BulkWrite();
    $bulk->delete(['_id' => $object_id]);

    $result = Connection::getConnection()->executeBulkWrite(
        Connection::getConf()
          ->database
          ->name . '.Poll', $bulk
        );

    return $result->getDeletedCount() > 0;
  }

  public static function updatePoll($id, $poll)
  {
    $object_id = new \MongoDB\BSON\ObjectId($id);
    $poll_data = $poll;

    $bulk = new \MongoDB\Driver\BulkWrite();
    $bulk->update(
      ['_id' => $object_id],
      ['$set' => $poll_data]
    );

    $result = Connection::getConnection()->executeBulkWrite(
        Connection::getConf()
          ->database
          ->name . '.Poll', $bulk
        );

    return $result->getModifiedCount() > 0;
  }
}
