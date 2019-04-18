<?php

$config = require_once __DIR__ . '/../../config/config.php';

for ($i = 1; $i < 5; $i++) {
    $response = file_get_contents($config['target'] . 'customer/get.php?id=' . $i);

    echo $response . PHP_EOL;
}
