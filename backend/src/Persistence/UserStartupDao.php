<?php

/**
 * 
 * Class:  UserStartupDAO 
 */

namespace Persistence;

use \Persistence\IDao as IDao;

class UserStartupDAO implements IDao
{

      function insert(\Model\UserDeveloper $user): object
      {
            $inserts = new MongoDB\Driver\BulkWrite(['ordered' => true]);

            $inserts->insert($user);
            // $manager->executeBulkWrite("CONDEV.user", $inserts);
            //  = [
            //       "name" => "",
            //       "email" => "",
            //       "tag" => ["php", "slim", "laravel"],
            //       "following" => [],
            //       "active" => true,
            //       "ocupation" => "",
            //       "birthDate" => "",
            //       "description" => "",
            //       "locale" => ""
            // ];
            return $user;
      }

      function getAll()
      { }
      function findById(int $id)
      { }
      function findByName(string $name)
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
