<?php

/**
 * Arquivo de definições de configuração do sistema
 */

//declare( strict_types = 1);

$file = file_get_contents(__DIR__  . '/config.json');


$conf = json_decode($file);

//Constantes para uso do sistema
define('APP_MODE', $conf->app->mode);
define('DSN', $conf->dsn);
define('DB_TYPE', $conf->database->type);
define('DB_HOST', $conf->database->host);
define('DB_PORT', $conf->database->port);
define('DB_NAME', $conf->database->name);

if (APP_MODE == 'dev') :
    ini_set('display_errors', '1');
    error_reporting(E_ALL | E_WARNING);
endif;
