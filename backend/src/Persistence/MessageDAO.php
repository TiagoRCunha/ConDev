<?php

/**
 * 
 * Class:  MessageDao 
 */

namespace Persistence;

use \Persistence\IDao as IDao;

// TODO
class MessageDao implements IDao
{

  function insert(\Model\User $user): bool
  {
    return false;
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
