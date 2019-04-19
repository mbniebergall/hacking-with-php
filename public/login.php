<?php

if ($_POST['username'] == 'admin' && $_POST['password'] == 'abcd1234') {
    echo json_encode(['success' => true]);
    return;
}

echo json_encode(['success' => false]);