<?php

/**
 * Conexao com o banco de dados.
 */

namespace App\Persistence;

class Connection
{

    public static function getConnection()
    {

        $manager = new \MongoDB\Driver\Manager(DSN);

        return $manager;
    }
}