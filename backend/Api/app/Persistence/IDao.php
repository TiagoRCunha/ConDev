<?php

/**
 * 
 *  Interface: IDao
 */

namespace App\Persistence;

interface IDao
{
   function getAll(): array;
   function findById(int $id): Object;
   // function findByName(string $name): Object;
   function insert(Object $data): bool;
   function update(Object $data): bool;
   function delete(Object $data): bool;
}