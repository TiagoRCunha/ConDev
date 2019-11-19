<?php
/**
 * 
 * Class:  userDao 
 */

 namespace Persistence;

 use \Persistence\IDao as IDao;

 class UserDao implements IDao {
     
    function insert(\Model\User $user): bool{
          return false;
    }
    
    function getAll(): Array {

    }
    function findById(int $id): Object {


    }
    function findByName(string $name): Object{

    }
    
    function update(Object $data): bool {
          return false;
    }

    function delete(Object $data): bool {
          return false;
    }
 }

 