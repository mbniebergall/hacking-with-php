<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$config = require_once __DIR__ . '/../../config/config.php';

$client = new \GuzzleHttp\Client;
$faker = \Faker\Factory::create();

for ($i = 0; $i < 5; $i++) {
    $response = $client->request(
        'POST',
        $config['target'] . 'contact/create.php',
        [
            'form_params' => [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'cell' => $faker->phoneNumber,
                'username' => $faker->userName,
                'password' => $faker->password,
            ]
        ]
    );
    echo $response->getBody() . PHP_EOL;
}
