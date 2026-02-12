<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('zh_CN');

//name
echo "Name: " . $faker->name . "\n";

//address
echo "Address: " . $faker->address . "\n";

//text
echo "text: " . $faker->uuid . "\n";
