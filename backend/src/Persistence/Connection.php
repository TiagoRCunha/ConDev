<?php

/**
 * Conexao com o banco de dados.
 */

namespace Persistence;

class Connection
{

    public static function getConnection()
    {

        $client = new MongoDB\Client(DSN);
        $manager = new MongoDB\Driver\Manager($client);

        return $manager;
    }
}
