<?php

require_once 'vendor/autoload.php';

$uuid = \Ramsey\Uuid\Uuid::uuid4();

var_dump($uuid->toString());

$uuid2 = \Ramsey\Uuid\Uuid::uuid1();
var_dump($uuid2->toString());
var_dump($uuid2->getFields()->getBytes());

$nodeProvider = new \Ramsey\Uuid\Provider\Node\RandomNodeProvider();
$uuid3 = \Ramsey\Uuid\Uuid::uuid1($nodeProvider->getNode());
var_dump($uuid3->toString());