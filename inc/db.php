<?php

require_once 'rb.php';

$db = parse_url(getenv("DATABASE_URL"));
$db["path"] = ltrim($db["path"], "/");

//$db = array(
//   'dsn' => 'mysql:host=localhost; dbname=payment; charset=utf8',
//    'user' =>'root',
//    'pass'=>''
//);
//R::setup($db['dsn'], $db['user'],$db['pass']);
