<?php
/**
 * 
 *  Interface: IDao
 */

namespace Persistence;

 interface IDao {
    function getAll(): Array;
    function findById(int $id): Object;
    function findByName(string $name): Object;
    function insert(Object $data): bool;
    function update(Object $data): bool;
    function delete(Object $data): bool;
 }