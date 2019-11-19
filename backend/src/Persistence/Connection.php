<?php
/**
 * Conexao com o banco de dados.
 */

namespace Persistence;

class Connection {

    private static $pdo;

    public static function getConnection(){
        
        $options = [
            \PDO::ATTR_PERSISTENT => true,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ];

        if ( ! self::$pdo ):
            $dsn = DB_TYPE . ":host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME ; 
            self::$pdo = new \PDO($dsn,DB_USER,DB_PASS,$options);
        else:
            echo "já existe uma conexão, vou usá-la.";
        endif;

        return self::$pdo;
    }
}
