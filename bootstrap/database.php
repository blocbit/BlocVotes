<?php
/**
 * The database configure
 * @author  Yifan Wu
*/

$capsule = new \Illuminate\Database\Capsule\Manager;

$capsule->addConnection([
    'driver' => getenv('DB_DRIVER'),
    'host' => getenv('DB_HOST'),
    'database' => getenv('DB_DATABASE'),
    'username' => getenv('DB_USERNAME'),
    'password' => getenv('DB_PASSWORD'),
    'charset' => 'utf8',
    'port' => getenv('DB_PORT'),
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

/**
$db_host = "127.0.0.1";
$db_name = "blockvotes";
$db_user = "root";
$db_pass = "";


use Illuminate\Database\Capsule\Manager AS Capsule;

$capsule = new Capsule();
$capsule->addConnection([
  'driver'    => "mysql",
  "host"      => $db_host,
  "database"  => $db_name,
  "username"  => $db_user,
  "password"  => $db_pass,
  "charset"   => "utf8",
  "collation" => "utf8_general_ci",
  "prefix"    => ""
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
*/