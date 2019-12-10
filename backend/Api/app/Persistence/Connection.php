<?php

/**
 * Conexao com o banco de dados.
 */

namespace App\Persistence;

class Connection
{

  protected static $dsn;

  public static function getConnection()
  {

    if (self::getConf()->app->mode == 'dev') :
      ini_set('display_errors', '1');
      error_reporting(E_ALL | E_WARNING);
    endif;

    $manager = new \MongoDB\Driver\Manager(self::getConf()->dsn);

    return $manager;
  }

  /**
   * Obtem o datasource name da conexao
   * @param none
   * @return string String de conexao..
   */
  public static function getConf()
  {

    $file = file_get_contents(__DIR__  . '/config.json');
    $conf = json_decode($file);

    return $conf;
  }
}
