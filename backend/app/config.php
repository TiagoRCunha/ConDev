<?php

declare(strict_types=1);

use MongoDB\Client as Mongo;

$user = '****';
$pwd = '*****';
$client = new Mongo(
  "mongodb+srv://$user:$pwd@cluster0-nid0i.mongodb.net/test?retryWrites=true&w=majority"
);

$db = $client->CONDEV;

$collection = $db->user;
$result = $collection->find()->toArray();

//echo $result;
